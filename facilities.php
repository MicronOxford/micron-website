<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB">

<head>
  <title>Micron Oxford Advanced Bioimaging: facilities page</title>
  <meta name=description content="Micron Oxford facilities">
  <meta name=keywords content="advanced bioimaging microscopy facilities image analysis processing super-resolution wide-field confocal TIRF">
  <meta http-equiv="Content-Type" CONTENT="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="styles/main.css" >
  <link rel="stylesheet" type="text/css" href="styles/facilities.css" >
  <link rel="icon" type="image/ico" href="images/MicronMu.ico" >
  <script src="google_analytics.js"></script>
</head>

<body id="facilities">
  <div id="container_all">

    <?php include "headnav.html"; ?>

    <div id="mainbody">

      <h3>Fluorescence microscopes</h3>

      <p>
        We have a range of super-resolution, wide-field and confocal systems.
        If you are unsure which instrument suits your needs, we have produced
        an <a href="facilities/microscope_comparison.shtml">instrument summary table</a>
        of the pros and cons of each. Our <a href="resources.php">educational material</a>
        also contains a wealth of information that should enable you to get
        the most out of your imaging. If you have any questions or to enquire
        about access and charges please <a href="mailto:micron@bioch.ox.ac.uk">email micron</a>.
      </p>

      <?php
        include "scripts/equipment.php";
        use MicronOxford\HTMLEquipmentTable;
        use MicronOxford\Equipment;

        $equipment = new HTMLEquipmentTable (array (
          new Equipment (
            "OMXv2",
            "OMX V2",
            "The OMX V2 microscope is a structual illumimation microscope.",
            "images/OMXV2_thumb.jpg",
            "facilities/OMXV2.php"
          ),
          new Equipment (
            "OMXv3",
            "OMX V3",
            "The OMX V3 BLAZE is a 'turn-key' microscope for very rapid widefield imaging or super-resolution imaging of fixed and live samples.",
            "images/OMXV2_thumb.jpg",
            "facilities/OMXV3.php"
          ),
          new Equipment (
            "bungle",
            "DVElite",
            "The DV core microscopes are wide-field deconvolution systems.",
            "images/DVcore_thumb.jpg",
            "facilities/bungle.php"
          ),
          new Equipment (
            "zippy",
            "Zippy Invert DVcore",
            "The DV core microscopes are wide-field deconvolution systems.",
            "images/DVcore_thumb.jpg",
            "facilities/zippy.php"
          ),
          new Equipment (
            "PE_Ultraview",
            "PE Ultraview",
            "Nasmyth Perkin-Elmer spinning disk confocal.",
            "images/sdisk_thumb.jpg",
            "facilities/PerkinElmerNasmyth.php"
          ),
          new Equipment (
            "37C_Ultraview",
            "37C Ultraview",
            "Barr Perkin-Elmer spinning disk confocal.",
            "images/sdisk_thumb.jpg",
            "facilities/PerkinElmerBarr.php"
          ),
          new Equipment (
            "PALM_TIRF",
            "PALM/TIRF",
            "PALM/TIRF system",
            "images/PALM_thumb.jpg",
            "facilities/TIRF.php"
          ),
          new Equipment (
            "Z1_lightsheet",
            "Z1 lightsheet",
            "Zeiss Z1 light sheet Microscope",
            "images/lightsheet_thumb.jpg",
            "facilities/lightsheet.php"
          ),
        ));
        $equipment->draw_facilities_table (4);
      ?>

      <!-- FIXME these are in separate table because they need status
                 information on micron wiki -->
      <table class="instruments">
        <tr>
          <td><a href='facilities/Olympus.php'><img src='images/FV1000_thumb.jpg' width='200'></a></td>
          <td><a href='facilities/OMXV2dSTORM.php'><img src='images/dSTORM_thumb.jpg' width='200'></a></td>
          <td><a href='facilities/Olympuslive.php'><img src='images/FV1200_thumb.jpg' width='200'></a></td>
          <td></td>
        </tr>
        <tr>
          <td><p>Olympus FV1000 Laser Scanning Microscope with Becker and Hickel FLIM system.</p></td>
          <td><p>OMX V2 dSTORM lightpath</p></td>
          <td><p>Live Cell / DNA damage Olympus</p></td>
          <td></td>
        </tr>
      </table>

      <h3>Electron microscopes (Dunn school)</h3>

      <table class="instruments">
        <tr>
          <td><a href="http://web.path.ox.ac.uk/~bioimaging//ElectronMicroscopes/TEM.html"><img src="images/TEM.jpg" width="200"></a></td>
          <td><a href="http://web.path.ox.ac.uk/~bioimaging//ElectronMicroscopes/SEM.html"><img src="images/SEM.jpg" width="200"></a></td>
          <td><a href="http://web.path.ox.ac.uk/~bioimaging/ElectronMicroscopes/3View.html"><img src="images/3Viewb.png" width="200"></a></td>
          <td></td>
        </tr>
        <tr>
          <td><p>Philips Technai 12 electron microscope</p></td>
          <td><p>Scanning JOEL JSM-6390 EM</p></td>
          <td><p>Zeiss 3View</p></td>
          <td></td>
        </tr>
      </table>

      <h3>Image Analysis suite</h3>

      <table class="instruments">
        <tr>
          <td><a href='facilities/analysis.php'><img src='images/image_suite.jpg' width='200'></a></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><p>Image Analysis Suite</p></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>

    </div>
    <?php include "footer.html"; ?>
  </div>
</body>

</html>

