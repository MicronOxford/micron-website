<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB">

<head>
  <title>Micron Oxford Advanced Bioimaging: Zeiss 880 Airyscan (upright)</title>
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
            "880upright",
            "Zeiss 880 Airyscan (upright)",
            "New Biochemistry Room 00-060",
            array (
              new SolidStateLaser (405, "Diode"),
			  new GasLaser (458, "Argon"),
              new GasLaser (488, "Argon"),
              new GasLaser (515, "Argon"),
              new GasLaser (561, "Diode"),
              new GasLaser (633, "HeNe"),
            ),
            array (
              new Objective (10, 0.5, "Plan-Apochromat (air)"),
              new Objective (20, 1.0, "Plan-Apochromat (water)"),
              new Objective (63, 1.40, "Oil Plan-Apochromat"),
            )
          );
        ?>

        <?php $FV1200->draw_header (); ?>

        <p>
          This microscope is an Axio Examiner upright Zeiss 880 fitted with Airyscan detector
        </p>

        <?php $FV1200->draw_description (); ?>

      </div>

      <div id="rightpanel">
        <img src="../images/airyscan_upright_thumbb.png" width="200" />
        <ul>
         
                   
          </ul>
      </div>

    </div>
    <?php include "../footer.html"; ?>
  </div>
</body>

</html>

