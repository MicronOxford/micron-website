<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB">

<head>
  <title>Micron Oxford Advanced Bioimaging: Live Cell Olympus</title>
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
          use MicronOxford\SolidStateLaser;
          use MicronOxford\GasLaser;
          use MicronOxford\Objective;

          $FV1200 = new OpticalMicroscope (
            "FV1200",
            "Olympus Fluoview FV1200",
            "Dunn School of Pathology Room 214.00.25",
            array (
              new SolidStateLaser (355),
              new SolidStateLaser (405),
              new SolidStateLaser (488),
              new GasLaser (488, "Argon"),
              new GasLaser (515, "Argon"),
              new GasLaser (559, "Argon"),
              new GasLaser (635, "Argon"),
            ),
            array (
              new Objective (10, 0.40, "UPlanSApo (air)"),
              new Objective (20, 0.75, "UPlanSApo (air)"),
              new Objective (40, 1.30, "Oil UPlan FLN"),
              new Objective (60, 1.40, "Oil UPlanSApo"),
              new Objective (100, 1.40, "Oil UPlanSApo"),
            )
          );
        ?>

        <?php $FV1200->draw_header (); ?>

        <p>
          This microscope is an inverted IX83 motorized microscope equipped
          with Sensitvie GASP detectors, a 355nm DNA damage laser and an
          environmental chamber for live cell work.
        </p>

        <?php $FV1200->draw_description (); ?>

      </div>

      <div id="rightpanel">
        <img src="../images/FV1200_thumb.jpg" width="200" />
        <ul>
          <li><a href="../resources/Olympus_FV1200.pdf" >Users Guide</a></li>
          <li><a href="../resources/FV1200_stitching.pdf" target="_blank">Image Stitching</a></li>
          <li><a href="../resources/FV1200_LaserDamage.pdf" target="_blank">DNA damage</a></li>
          <li><a href="../resources/OlympusON.pdf" target="_blank">Turning ON</a></li>         
	                <li><a href="../resources/OlympusOFF.pdf" target="_blank">Turning OFF</a></li>
                    <li><a href="../resources/FV1200_QC_01102015.pdf" target="_blank">microscope performance: October 2015</a></li>
          </ul>
      </div>

    </div>
    <?php include "../footer.html"; ?>
  </div>
</body>

</html>

