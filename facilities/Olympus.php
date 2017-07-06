<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB">

<head>
  <title>Micron Oxford Advanced Bioimaging: Olympus</title>
  <meta http-equiv="Content-Type" CONTENT="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../styles/main.css" >
  <link rel="stylesheet" type="text/css" href="../styles/facilities.css" >
  <link rel="icon" type="image/ico" href="../images/MicronMu.ico" >

</head>

<body id="facilities">
  <div id="container_all">
    <?php include "../headnav.html"; ?>
    <div id="mainbody">
      <div id="leftpanel">

        <?php
          include "../scripts/microscopes.php";
          use MicronOxford\OpticalMicroscope;
          use MicronOxford\SolidStateLaser;
          use MicronOxford\GasLaser;
          use MicronOxford\Laser;
          use MicronOxford\Objective;

          $FV1000 = new OpticalMicroscope (
            "FV1000",
            "Olympus Fluoview FV1000",
            "Dunn School of Pathology Room 214.00.25",
            array (
              new SolidStateLaser (405),
              new SolidStateLaser (488),
              new Laser (488, "Pulsed"),
              new GasLaser (488, "Argon"),
              new GasLaser (515, "Argon"),
              new GasLaser (568, "Argon"),
              new GasLaser (633, "Argon"),
            ),
            array (
              new Objective (10, 0.40, "UPlanSApo (air)"),
              new Objective (20, 0.75, "UPlanSApo (air)"),
              new Objective (40, 1.30, "Oil UPlan FLN"),
              new Objective (60, 1.35, "Oil UPlanSApo"),
              new Objective (100, 1.40, "Oil UPlanSApo"),
            )
          );
        ?>

        <?php $FV1000->draw_header (); ?>
      

        <p>
          This microscope is an inverted IX81 motorized microscope equipped
          with FV1000 Point scanning laser and Becker and Hickel FLIM system
        </p>

        <?php $FV1000->draw_description (); ?>

      </div>

      <div id="rightpanel">
        <img src="../images/FV1000_thumb.jpg" width="200" />
        <ul>
          <li>Microscope Room: 01865 275535</li>
          <li><a href="../resources/Olympus_FV1000.pdf" >Users Guide</a></li>
          <li><a href="../resources/stitching.pdf" target="_blank">Image Stitching</a></li>
            <li><a href="../resources/FLIM.pdf" target="_blank">FLIM</a></li>
          <li><a href="../resources/OlympusON.pdf" target="_blank">Turning ON</a></li>         
	                <li><a href="../resources/OlympusOFF.pdf" target="_blank">Turning OFF</a></li>
          <li><a href="../resources/FV1000.pdf">Specifications</a></li>
          <li><a href="http://www.becker-hickl.de/">Becker and Hickel</a></li>
          <li><a href="http://wiki.micron.ox.ac.uk/w/Olympus_FV1000_Confocal">Olympus Wiki</a></li>
          
        </ul>
      </div>

    </div>
    <?php include "../footer.html"; ?>
  </div>
</body>

</html>

