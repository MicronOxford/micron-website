<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB">

<head>
  <title>Micron Oxford Advanced Bioimaging: OMX V3</title>
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

          $omxv3 = new OpticalMicroscope (
            "omxv3",
            "OMX V3 Optical Microscope, eXperimental (BLAZE)",
            "New Biochemistry Room 00-056",
            array (
              new SolidStateLaser (405),
              new SolidStateLaser (488),
              new GasLaser (488, "Argon"),
              new GasLaser (593, "Argon"),
              new GasLaser (633, "Argon"),
            ),
            array (
              new Objective (60, 1.42, "Oil UPlanSApo"),
            )
          );
        ?>

        <?php $omxv3->draw_header (); ?>

        <p>
          This is a cutting edge fluorescence microscope system. It has
          two complimentary functionalities.
        </p>

        <p>
          Fast Live mode: In this mode it is able to grab simultaneous
          images in multiple colours, extremely rapidly and with very
          accurate timing control.
        </p>

        <p>
          3D Structured Illumination mode: in this mode the system uses
          structured illumination and computer processing to generate 3D
          image stacks with twice the conventional resolution, ie just
          over 100nm in XY and about 250 nm in Z.
        </p>

        <?php $omxv3->draw_description (); ?>

        <h4>Drawer configurations</h3>
        <p>
          The OMX V3 BLAZE comes with 2 drawers with the following
          configurations:
        </p>

        <p>
          <img src="../images/V3_standard_drawer.jpg" width="500"
            alt="OMX V3 standard drawer" title="OMX V3 standard drawer"/>
        </p>

        <p>
          <img src="../images/V3_live_drawer.jpg" width="500"
            alt="OMX V3 live drawer" title="OMX V3 live drawer"/>
        </p>
      </div>

      <div id="rightpanel">
        <img id="OMX V3 BLAZE" src="../images/OMXV3.png" width="280" />
        <br>
        <ul>
          <li><a href="http://www.cshlpress.com/pdf/sample/LiveCell2.pdf" title="OMX book chapter">OMX book Chapter</a></li>
          <li><a href="http://msg.ucsf.edu/sedat/omx/" title="Sedat Lab OMX" >Sedat Lab OMX</a></li>
          <li><a href="http://www.api.com/deltavision-omx.asp" title="Applied Precision">Applied Precision</a></li>
          <li><a href="http://www.OMXwiki.com" title="OMX wiki">OMX Wiki</a></li>
          <li><a href="http://micronwiki.bioch.ox.ac.uk/wiki/OMX_V3_(Blaze)"  title="OMX V3 Wiki">Micron OMX V3 (BLAZE) Wiki</a></li>
          <li><a href="../resources/standard_drawer.pdf" title="standard drawer configuartion">standard drawer configuartion</a></li>
          <li><a href="../resources/live_drawer.pdf" title="live drawer configuartion">live drawer configuartion</a></li>
        </ul>
      </div>

    </div>
    <?php include "../footer.html"; ?>
  </div>
</body>

</html>

