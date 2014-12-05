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

require (__DIR__ . "/equipment.php");

class LightSource
{
  public $common_name;
}

class Laser extends LightSource
{
  public $wavelength;

  public function __construct ($wavelength, $common_name)
  {
    $this->common_name = $common_name;
    $this->wavelength = new Wavelength ($wavelength);
    return;
  }
}

class GasLaser extends Laser
{
}

class SolidStatelaser extends Laser
{
  public function __construct ($wavelength)
  {
    parent::__construct($wavelength, "Solid State");
    return;
  }
}

class Lamp extends LightSource
{
}

class ArcLamp extends Lamp
{
}

class IncandescentLamp extends Lamp
{
}


class LED extends LightSource
{
}

class Wavelength
{
  public $length;
  public function __construct ($length)
  {
    $this->length = $length;
    return;
  }

  // FIXME this should be done by looping through dyes, and push them in
  //       if the wavelength is within their range
  public function suitable_dyes ()
  {
    switch ($this->length)
    {
      case 405: return array ("Alexa 405", "DAPI", "Hoechst");
      case 445: return array ("CFP");
      case 488: return array ("Alexa 488", "FITC", "GFP", "Cy2");
      case 515: return array ("Alexa 514", "YFP");
      case 561: return array ("Alexa 546", "TRITC", "Cy3", "DiI",
                              "propidium iodide", "Texas red", "mCherry");
      case 568: return array ("Alexa 546", "TRITC", "Cy3", "DiI",
                              "propidium iodide", "Texas red", "mCherry");
      case 593: return array ("Alexa 546", "TRITC", "Cy3", "DiI",
                              "propidium iodide", "Texas red", "mCherry");
      case 633: return array ("Alexa 633", "Alexa 647", "Cy5");
      case 638: return array ("Alexa 633", "Alexa 647", "Cy5");
      case 640: return array ("Alexa 633", "Alexa 647", "Cy5");
      default:  return array ();
    }
  }
  public function rgb_values ()
  {
    $l = $this->length;
    // fortran code http://www.physics.sfasu.edu/astro/color/spectra.html
    switch (true) // smart switch for ranges
    {
      case ($l < 380): // invisible light
        $r = 0; $g = 0; $b = 0;
        break;
      case ($l < 440):
        $r = -($l -440) /60 ; $g = 0; $b = 1;
        break;
      case ($l < 490):
        $r = 0; $g = ($l -440) /50; $b = 1;
        break;
      case ($l < 510):
        $r = 0; $g = 1; $b = -($l -510) /20;
        break;
      case ($l < 580):
        $r = ($l -510) /70; $g = 1; $b = 0;
        break;
      case ($l < 645):
        $r = 1; $g = -($l -645) /65; $b = 0;
        break;
      case ($l < 780):
        $r = 1; $g = 0; $b = 0;
        break;
      default:  // invisible light
        $r = 0; $g = 0; $b = 0;
    }
    return array (round ($r * 255), round ($g * 255), round ($b * 255));
  }

}

class Objective
{
  public $mag;
  public $NA;
  public $info;

  public function __construct ($mag, $NA, $info)
  {
    $this->mag  = $mag;
    $this->NA   = $NA;
    $this->info = $info;
    return;
  }
}

class Microscope extends Equipment
{
  // in here so we can later have TEM as well
}

class OpticalMicroscope extends Microscope
{
  protected $light_sources;
  protected $objectives;

  public function __construct ($id, $name, $location, array $light_sources, array $objectives)
  {
    parent::__construct ($id);
    $this->name           = $name;
    $this->location       = $location;
    $this->light_sources  = $light_sources;
    $this->objectives     = $objectives;
    return;
  }

  public function draw_header ()
  {
    echo "<h3>" . $this->name . "</h3><p>" . $this->location . "</p><br/>\n";
    return;
  }

  public function draw_description ()
  {

    $this->draw_status_div ("padding: 8px 15px; border-radius: 3px; border: 1px solid #CCC;");

    if (count ($this->light_sources))
      {
        echo "<h4>Light sources</h4>\n";

        $has_lasers = false;
        for ($i = 0;$i < count ($this->light_sources); $i++)
          {
            if ($this->light_sources[$i] instanceof Laser)
              {
                $has_lasers = true;
                break;
              }
          }

        if ($has_lasers)
          {
        echo "<table width='100%' border='1' align='left' cellpadding='4' style='padding-top: 10px; padding-bottom: 10px;'>\n";
            echo "<tr>\n";
            echo "<th width='13%'>Laser type</th>\n";
            echo "<th width='23%'>Wavelength</th>\n";
            echo "<th width='64%'>Suitable Dyes</th>\n";
            echo "</tr>\n";

            // we can continue from $i
            for (; $i < count ($this->light_sources); $i++)
              {
                if ($this->light_sources[$i] instanceof Laser)
                  {
                    $laser = $this->light_sources[$i];
                    $wavelength = $laser->wavelength;
                    echo "<tr>\n";
                    echo "<td>" . $laser->common_name . "</td>\n";
                    echo "<td  style='background-color:rgb(" . implode (",", $wavelength->rgb_values ()) . ")'>" . $wavelength->length . "</td>\n";
                    echo "<td>" . implode (", ", $wavelength->suitable_dyes ()) . "</td>\n";
                    echo "</tr>\n";
                  }
              }
            echo "</table>\n";
          }
      }

    if (count ($this->objectives))
      {
        echo "<h4>Objectives</h4>\n";

        echo "<table width='100%' border='1' align='left' cellpadding='4' style='padding-top: 10px; padding-bottom: 10px;'>\n";
        echo "<tr>\n";
        echo "<th width='10%'>Magnification</th>\n";
        echo "<th width='10%'>NA</th>\n";
        echo "<th width='80%'></th>\n";
        echo "</tr>\n";

        for ($i = 0; $i < count ($this->objectives); $i++)
          {
            $o = $this->objectives[$i];
            echo "<tr>\n";
            echo "<td>" . $o->mag . "x</td>\n";
            echo "<td>" . $o->NA .   "</td>\n";
            echo "<td>" . $o->info . "</td>\n";
            echo "</tr>\n";
          }
            echo "</table>\n";
      }

    return;
  }

}

?>

