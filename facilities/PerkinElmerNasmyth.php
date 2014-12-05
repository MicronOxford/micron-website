<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB">

<head>
  <title>Micron Oxford Advanced Bioimaging: Spinning Disc</title>
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

          $nasmyth = new OpticalMicroscope (
            "PE_Ultraview",
            "UltraView Spinning Disk system (Nasmyth)",
            "New Biochemistry Room 00-031",
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

        <?php $nasmyth->draw_header (); ?>

        <p>
          Spinning-disc confocal microscope (Ultra- VIEW VoX; PerkinElmer;
          mounted on an IX81 microscope [Olympus]; 60x 1.3 NA silicon
          immersion objective and an electron-multiplying charge-coupled
          device camera [ImagEM; Hamamatsu Photonics]).
        </p>
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

        <?php $nasmyth->draw_description (); ?>
      </div>

      <div id="rightpanel">
        <img src="../images/sdisk_thumb.jpg" width="200" />
        <ul>
          <li><a href="http://micronwiki.bioch.ox.ac.uk/wiki/UltraView_spinning_disk_(Nasmyth)">Spinning Disc Wiki</a></li>
          <li><a href="http://www.perkinelmer.com/pages/020/cellularimaging/technologies/spinningdiskconfocal.xhtml">Perkin Elmer</a></li>
          <li><a href="../resources/Nasmyth Ultraview spinning disk.pdf" target="_blank">Specifications</a></li>
          <li><a href="../resources/Ultraview Vox User Protocol Nasmyth 01.pdf" target="_blank">Spinning Disc Users Manual</a></li>
        </ul>
      </div>

    </div>
    <?php include "../footer.html"; ?>
  </div>
</body>

</html>

