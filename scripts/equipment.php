<?php
namespace MicronOxford;
// Copyright (C) 2014 Carnë Draug <carandraug@octave.org>
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License as
// published by the Free Software Foundation; either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
// General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, see
// <http://www.gnu.org/licenses/>.

class MissingEquipment extends \Exception
{ }

class BadWikiSyntax extends \Exception
{ }

class State
{
  const UP      = 1;
  const DOWN    = 2;
  const ISSUES  = 3;
  const ERROR   = 4;

  public static function get_color ($state)
  {
    switch ($state)
    {
      case self::UP:     return "#396";
      case self::ISSUES: return "#F29D50";
      // whether it is DOWN or we do not know, it is bad (red)
      default:            return "#C30";
    }
  }

  public static function get_message (EquipmentStatus $status)
  {
    $message = trim ($status->info);
    if (! $message)
      $message = self::get_short_message ($status);
    return $message;
  }

  public static function get_short_message (EquipmentStatus $status)
  {
    switch ($status->state)
    {
      case self::UP:     return "System operational";
      case self::DOWN:   return "System down";
      case self::ISSUES: return "Experiencing issues";
      default:           return "Unrecognized system state";
    }
  }

}

class EquipmentStatus
{
  public $state;  // State
  public $info;   // string
}

class EquipmentManager
{
  private static $status_source_link
    = "http://micronwiki.bioch.ox.ac.uk/wiki/Microscope_status?action=raw";
  private static $source = array ();  // array<string>
  private static $status = array ();  // array<State>

  public function __construct ()
  {
    if (! empty (EquipmentManager::$status))
      return;

    if (! $raw = file (self::$status_source_link))
      return; // reading failed for some reason

    foreach ($raw as $line)
      {
        if ($line[0] != "*")
          continue;
        EquipmentManager::$source[] = $line;
      }
    return;
  }

  public function status_of (Equipment $s)
  {
    $this->fill_status_of ($s);
    return self::$status[$s->id];
  }

  private function fill_status_of (Equipment $s)
  {
    $id = $s->id;
    if (array_key_exists ($id, self::$status))
      return;

    foreach (self::$source as $line)
      {
        if (preg_match_all ("/\*\s?
                             (?<id>$id)
                             \s?-\s?
                             (?<status>up|down|issues)
                             (?:\s*-\s*(?<info>.*))?
                             $/ix",
                            $line, $matches))
          {
            $eq_status = new EquipmentStatus ();
            // If only PHP had real enums...
            switch (strtolower ($matches["status"][0]))
            {
              case "up"     : $eq_status->state = State::UP;      break;
              case "down"   : $eq_status->state = State::DOWN;    break;
              case "issues" : $eq_status->state = State::ISSUES;  break;
              default: throw new BadWikiSyntax ("weird equipment state");
            }
            if (array_key_exists ("info", $matches))
              $eq_status->info = $matches["info"][0];

            self::$status[$id] = $eq_status;
            return;
          }
      }
    throw new MissingEquipment ("Unable to find status for " . $s->name);
  }

}

class Equipment
{
  public $id;           // string
  public $name;         // string
  public $description;  // string
  public $thumbnail;    // string (url)
  public $page;         // string

  protected $status;       // EquipmentStatus
  protected $location;      // string

  public function __construct ($id, $name = "", $description = "",
                               $thumbnail = "", $page = "")
  {
    $this->id           = $id;
    $this->name         = $name;
    $this->description  = $description;
    $this->thumbnail    = $thumbnail;
    $this->page         = $page;
    return;
  }

  public function status ()
  {
    if (empty ($this->status))
      {
        $manager = new EquipmentManager ();
        try
          {
            $status = $manager->status_of ($this);
          }
          catch (MissingEquipment $e)
            {
              $status = new EquipmentStatus;
              $status->state = State::ERROR;
              $status->info  = "Unrecognized system";
            }
          catch (BadWikiSyntax $e)
            {
              $status = new EquipmentStatus;
              $status->state = State::ERROR;
              $status->info  = "Unrecognized system state";
            }
          $this->status = $status;
      }
    return $this->status;
  }

  public function draw_status_div ($more_style)
  {
    $status   = $this->status ();
    $color    = State::get_color ($status->state);
    $message  = State::get_message ($status);

    echo "<div style='background-color: $color;$more_style'>$message</div>\n";
    return;
  }
}

class HTMLEquipmentTable
{
  private $equipment = array ();  // array<Equipment>

  public function __construct (array $equipment)
  {
    $this->equipment = $equipment;
    return;
  }

  public function draw_facilities_table ($n_cols)
  {
    $count = count ($this->equipment);
    $n_rows = ceil (count ($this->equipment) / $n_cols);

    echo "<table class='instruments'>\n";
    for ($row = 0; $row < $n_rows; $row++)
      {
        $this->draw_facilities_table_row ($row, $n_cols, "draw_facilities_state");
        $this->draw_facilities_table_row ($row, $n_cols, "draw_facilities_thumbnail");
        $this->draw_facilities_table_row ($row, $n_cols, "draw_facilities_description");
      }
    echo "</table>\n";
    return;
  }

  private function draw_facilities_table_row ($row, $n_cols, $method)
  {
    echo "<tr>\n";
    for ($col = 0; $col < $n_cols; $col++)
      {
        $i = ($row * $n_cols) + $col;
        if ($i < count ($this->equipment))
          call_user_func (array ($this, $method), $this->equipment[$i]);
        else
          echo "<td></td>\n";
      }
    echo "</tr>\n";
  }

  private function draw_facilities_state ($equipment)
  {
    $status   = $equipment->status ();
    $color    = State::get_color ($status->state);
    $message  = State::get_short_message ($status);
    echo "<td style='background-color: $color; padding: 8px 15px;'>$message</td>\n";
  }

  private function draw_facilities_thumbnail ($equipment)
  {
    echo  "<td>\n" .
            "<a href='" . $equipment->page . "'>" .
              "<img src='" . $equipment->thumbnail . "' width='200'>" .
            "</a>" .
          "</td>\n";
  }

  private function draw_facilities_description ($equipment)
  {
    echo  "<td><p>" . $equipment->description . "</p></td>\n";
  }

  private function get_color_and_message ()
  {
    try
      {
        $status   = $equipment->status ();
        $color    = State::get_color ($status->state);
        $message  = State::get_short_message ($status);
      }
    catch (MissingEquipment $e)
      {
        $color = State::get_color (State::DOWN);
        $message = "Unrecognized system";
      }
    catch (BadWikiSyntax $e)
      {
        $color = State::get_color (State::DOWN);
        $message = "Unrecognized system state";
      }
  }

}

?>

