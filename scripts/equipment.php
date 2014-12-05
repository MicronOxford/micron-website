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
    $id = $s->id ();
    if (array_key_exists ($id, EquipmentManager::$status))
      return EquipmentManager::$status[$id];

    foreach (EquipmentManager::$source as $line)
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
            // If only PHP had enums...
            switch (strtolower ($matches["status"][0]))
            {
              case "up"     : $eq_status->state = State::UP;      break;
              case "down"   : $eq_status->state = State::DOWN;    break;
              case "issues" : $eq_status->state = State::ISSUES;  break;
              default: throw new BadWikiSyntax ("weird equipment state");
            }
            if (! array_key_exists ("info", $matches))
              $eq_status->info = $matches["info"][0];

            EquipmentManager::$status[$id] = $eq_status;
            return $eq_status;
          }
      }
    throw new MissingEquipment ("Unable to find status for " . $s->name);
  }

}

class Equipment
{
  public $name;         // string
  public $description;  // string
  public $thumbnail;    // string (url)
  public $page;         // string
  public $status;       // State

  public function __construct ($name, $description, $thumbnail, $page)
  {
    $this->name         = $name;
    $this->description  = $description;
    $this->thumbnail    = $thumbnail;
    $this->page         = $page;

    $this->id = preg_replace ("/[^a-zA-Z0-9_]/", "_", $name);
    return;
  }

  public function status ()
  {
    if (empty ($this->status))
      {
        $manager = new EquipmentManager ();
        $this->status = $manager->status_of ($this);
      }
    return $this->status;
  }

  // Same as $name stripped of whitespace for quicker parsing of
  // the source on the wiki
  private $id = "";
  public function id ()
  {
    return $this->id;
  }
}

class HTMLEquipmentTable
{
  private $n_columns = 4;
  private $equipment = array ();  // array<Equipment>

  public function __construct (array $equipment)
  {
    $this->equipment = $equipment;
    return;
  }

  public function draw_facilities_table ()
  {
    $count  = count ($this->equipment);
    $n_cols = $this->n_columns;
    $n_rows = ceil ($count / $n_cols);

    echo "<table class='instruments'>\n";
    $i = 0;
    for ($r = 0; $r < $n_rows; $r++)
      {

        // First row - report system status
        echo "<tr>\n";
        for ($c = 0; $c < $n_cols; $c++)
          {
            $i = ($r * $n_cols) + $c;
            if ($i >= $count)
              break;

            switch ($this->equipment[$i]->status ()->state)
            {
              case State::UP:
                echo "<td style='background-color: #396; padding: 8px 15px; border-radius: 3px; font: 13px/1.5'>System operational</td>\n";
                break;
              case State::DOWN:
                echo "<td style='background-color: #C30; padding: 8px 15px; border-radius: 3px; font: 13px/1.5'>System down</td>\n";
                break;
              case State::ISSUES:
                echo "<td style='background-color: #F29D50; padding: 8px 15px; border-radius: 3px; font: 13px/1.5'>Experiencing issues</td>\n";
                break;
            }

          }
        echo "</tr>\n";

        // Second row - thumbnail of system with link for page
        echo "<tr>\n";
        for ($c = 0; $c < $n_cols; $c++)
          {
            $i = ($r * $n_cols) + $c;
            if ($i >= $count)
              break;

            echo  "<td>\n" .
                    "<a href='" . $this->equipment[$i]->page . "'>" .
                      "<img src='" . $this->equipment[$i]->thumbnail . "' width='200'>" .
                    "</a>" .
                  "</td>\n";
          }
        echo "</tr>\n";

        // Third row - short description of system and link
        echo "<tr>\n";
        for ($c = 0; $c < $n_cols; $c++)
          {
            $i = ($r * $n_cols) + $c;
            if ($i >= $count)
              break;

            echo  "<td><p>" . $this->equipment[$i]->description . "</p></td>\n";
          }
        echo "</tr>\n";
      }

    echo "</table>\n";
    return;
  }
}

?>

