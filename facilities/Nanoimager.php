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
            "nanoimager",
            "Oxford Nanoimaging (ONI) Nanoimager",
            "New Biochemistry Room 00-058",
            array (
              new SolidStateLaser (405, "Diode"),
			  new SolidStateLaser (532, "Diode"),
			  new SolidStateLaser (640, "Diode"),
            ),
            array (
              new Objective (100, 1.4, "UPlanSApo (oil)"),
            )
          );
        ?>

        <?php $FV1200->draw_header (); ?>

        <p>
          The Nanoimager is a compact, benchtop super-resolution microscope. The instrument can be used for a number of different applications including single-molecule localization-based super-resolution for quantitative cellular imaging, TIRF and epifluorescence for diffraction-limited fluorescence imaging, single-molecule FRET for measuring molecular interactions in the 2-10 nm range and single particle tracking PALM in cells.
 
        </p>

        <?php $FV1200->draw_description (); ?>

      </div>

      <div id="rightpanel">
        <img src="../images/nanoimager.png" width="200" />
        <ul>
         
                    <p> <a href="http://www.oxfordni.com/">Oxford Nanoimager</a></p>
     
          </ul>
      </div>

    </div>
    <?php include "../footer.html"; ?>
  </div>
</body>

</html>

