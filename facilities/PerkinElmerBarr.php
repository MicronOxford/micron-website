<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB">

<head>
  <title>Micron Oxford Advanced Bioimaging: Spinning Disc</title>
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

          $barr = new OpticalMicroscope (
            "37C_Ultraview",
            "UltraView Spinning Disk system (Barr)",
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
              new Objective (20, 0.5, "air UPlan"),
              new Objective (40, 0.75, "air UPlan"),
              new Objective (60, 1.20, "water UPlanSApo"),
              new Objective (60, 1.42, "oil PlanApoN"),
              new Objective (100, 1.40, "oil UPlanSApo"),
            )
          );
        ?>

        <?php $barr->draw_header (); ?>

        <p>
          The UltraView system is a spinning disc confocal, providing
          optical sectioning while still permitting rapid imaging, on the
          order of 20 frames/s. It has 6 laser lines, 405, 488, 514, 532,
          568 and 633. This allows a very wide range of fluorescent probes
          to be used on the system. The instrument is also fitted with a
          photo-bleach/activation unit, which can be used to provide either
          single spots or arbitrary shapes via line or raster scans. This
          instrument is particularly useful for doing live cell imaging as
          the high imaging speed and low background provide crisp images of
          even fast moving objects in live cells.
        </p>

        <?php $barr->draw_description (); ?>
      </div>

      <div id="rightpanel">
        <img src="../images/sdisk_thumb.jpg"  width="200" />
        <ul>
          <li><a href="../resources/Barr_Ultraview_Users_Manual.pdf">Users Manual</a></li>
          <li><a href="https://wiki.micron.ox.ac.uk/w/UltraView_spinning_disk_(Barr)">Spinning Disc Wiki</a></li>
          <li><a href="http://www.perkinelmer.com/pages/020/cellularimaging/technologies/spinningdiskconfocal.xhtml">Perkin Elmer</a></li>
          <li><a href="../resources/Nasmyth Ultraview spinning disk.pdf">Specifications</a></li>
        </ul>
      </div>

    </div>
    <?php include "../footer.html"; ?>
  </div>
</body>

</html>
