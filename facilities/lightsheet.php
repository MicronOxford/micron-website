<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB">

<head>
  <title>Micron Oxford Advanced Bioimaging: Zeiss Z1 Lightsheet microscope</title>
  <meta http-equiv="Content-Type" CONTENT="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../styles/main.css" >
  <link rel="stylesheet" type="text/css" href="../styles/facilities.css" >
  <link rel="icon" type="image/ico" href="../images/MicronMu.ico" >
  <script src="../google_analytics.js"></script>
</head>

<body id="facilities">
  <div id="container_all">
    <?php include "../headnav.html"; ?>
    <div id="mainbody">
      <div id="leftpanel">

        <?php
          include "../scripts/microscopes.php";
          use MicronOxford\OpticalMicroscope;
          use MicronOxford\Laser;
          use MicronOxford\Objective;

          $z1 = new OpticalMicroscope (
            "Z1_lightsheet",
            "Zeiss Z1 Lightsheet",
            "New Biochemistry Room 00-060",
            array (
              new Laser (405, ""),
              new Laser (445, ""),
              new Laser (488, ""),
              new Laser (514, ""),
              new Laser (561, ""),
              new Laser (638, ""),
            ),
            array (
              new Objective (5, 0.16, "Air"),
              new Objective (20, 1.0, "Water"),
              new Objective (63, 1.0, "Water"),
            )
          );
        ?>

        <?php $z1->draw_header (); ?>

        <p>
          This is a commercial lightsheet microscope designed primarily for
          time-lapse imaging of thick specimens that a scanning confocal
          microscope would struggle with. Imaging of thick, fixed samples is
          also possible. Specimens are illuminated with one or two thin light
          sheets from opposite sides perpendicular to the detection objective.
          This vastly reduces light exposure and therefore bleaching of the
          sample and enables penetration depths of up to 100 µm. It is possible
          to image in single or multiview mode, the latter through rotating
          the sample and imaging stacks at six to eight different angles,
          which can then be recombined into a 360° view. Specimens are
          embedded in 1% low-melting agarose or similar inside glass
          capillaries and then extruded and imaged in buffer.
        </p>
        <p>
          This system is fitted with an incubation chamber with temperature
          and CO2 control.
        </p>

        <?php $z1->draw_description (); ?>

      </div>

      <div id="rightpanel">
        <img src="../images/lightsheet.png" width="280" />
        <ul>
          <li><a href="../resources/lightsheetusersguide.pdf">Users Guide</a></li>
        </ul>
      </div>

    </div>
    <?php include "../footer.html"; ?>
  </div>
</body>

</html>

