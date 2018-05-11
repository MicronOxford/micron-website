<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB">

<head>
  <title>Micron Oxford Advanced Bioimaging: OMX V2</title>
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
          use MicronOxford\Objective;

          $omxv2 = new OpticalMicroscope (
            "omxv2",
            "OMX V2 Optical Microscope, eXperimental",
            "New Biochemistry Room 00-056",
            array (
              new SolidStateLaser (405),
              new SolidStateLaser (488),
              new GasLaser (488, "Argon"),
              new GasLaser (515, "Argon"),
              new GasLaser (568, "Argon"),
              new GasLaser (633, "Argon"),
            ),
            array (
              new Objective (60, 1.35, "Oil UPlanSApo"),
            )
          );
        ?>

        <?php $omxv2->draw_header (); ?>

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

        <?php $omxv2->draw_description (); ?>
      </div>

      <div id="rightpanel">
        <img src="../images/OMXV2.png" width="280" />
        <br>
        <ul>
          <li><a href="http://www.cshlpress.com/pdf/sample/LiveCell2.pdf" title="OMX book chapter">OMX book Chapter</a></li>
          <li><a href="http://msg.ucsf.edu/sedat/omx/" title="Sedat Lab OMX">Sedat Lab OMX</a></li>
          <li><a href="http://www.api.com/deltavision-omx.asp" title="Applied Precision">Applied Precision</a></li>
          <li><a href="http://www.OMXwiki.com" title="OMX wiki">OMX Wiki</a></li>
          <li><a href="https://wiki.micron.ox.ac.uk/w/OMX_V2" title="OMX V2 Wiki">Micron OMX V2 Wiki</a></li>
          <li><a href="../resources/immunostaining_protocol_SIM.pdf" title="Immunostaining Protocol for SIM">Immunostaining Protocol for SIM</a></li>
        </ul>
      </div>

    </div>
    <?php include "../footer.html"; ?>
  </div>
</body>

</html>

