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
<h3>Micron Advanced Imaging Facility</h3>

      <p>
        We have a range of super-resolution, wide-field and confocal systems.
        If you are unsure which instrument suits your needs, we have produced
        an <a href="facilities/microscope_comparison.php">instrument summary table</a>
        of the pros and cons of each. <p>All users of the Micron facility must be trained by a member of staff before they can start using any systems. Please contact Micron (micron@bioch.ox.ac.uk) if you wish to start using any of our instruments or have any other questions.</p>
        
<h3><a href="people/Maryam.php">Image processing support</a></h3>
<h3><a href="facilities/booking_guidelines.php">Booking guidelines</a></h3>
<h3><a href="facilities/rules.php">Micron rules</a></h3>
<h3><a href="2015_Lectures.php">Learning more</a></h3>

      <h3>Fluorescence microscopes ('Turn-Key systems')</h3>

      <?php
        include "scripts/equipment.php";
        use MicronOxford\HTMLEquipmentTable;
        use MicronOxford\Equipment;

        $equipment = new HTMLEquipmentTable (array (
          new Equipment (
            "OMXv2",
            "OMX V2",
            "The OMX V2 microscope is a structured illumimation microscope.",
            "images/OMXV2.png",
            "facilities/OMXV2.php"
          ),
          new Equipment (
            "OMXv3",
            "OMX V3",
            "The OMX V3 BLAZE is a 'turn-key' microscope for very rapid widefield imaging or super-resolution imaging of fixed and live samples.",
            "images/OMXV3.png",
            "facilities/OMXV3.php"
          ),
          new Equipment (
            "bungle",
            "DVElite",
            "The DV core microscopes are wide-field deconvolution systems.",
            "images/elite.png",
            "facilities/bungle.php"
          ),
          new Equipment (
            "zippy",
            "Zippy Invert DVcore",
            "The DV core microscopes are wide-field deconvolution systems.",
            "images/zippy.png",
            "facilities/zippy.php"
          ),
          new Equipment (
            "PE_Ultraview",
            "PE Ultraview",
            "Nasmyth Perkin-Elmer spinning disk confocal.",
            "images/nasmythsd.png",
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
            "images/lightsheet.png",
            "facilities/lightsheet.php"
          ),
          new Equipment (
            "FV1000",
            "",
            "Olympus FV1000 Laser Scanning Microscope with Becker and Hickel FLIM system.",
            "images/FV1000_thumb.jpg",
            "facilities/Olympus.php"
          ),
          new Equipment (
            "FV1200",
            "",
            "Live Cell / DNA damage Olympus",
            "images/FV1200_thumb.jpg",
            "facilities/Olympuslive.php"
          ),
		            new Equipment (
            "880inverted",
            "",
            "Zeiss 880 Airyscan (inverted)",
            "images/airyscan_thumb.png",
            "facilities/zeiss880airyscan.php"
          ),
new Equipment (
            "880upright",
            "",
            "Zeiss 880 Airyscan (upright)",
            "images/airyscan_upright_thumb.png",
            "facilities/zeiss880airyscan_upright.php"
          ),
          new Equipment (
            "Nanoimager",
            "Nanoimager",
            "Nanoimager system",
            "images/nanoimager.png",
            "facilities/Nanoimager.php"
          ),

          ## do not have this for now.. this is the same microscope as OMXV2
#          new Equipment (
#            "omxv2_dstorm",
#            "",
#            "OMX V2 dSTORM lightpath",
#            "images/dSTORM_thumb.jpg",
#            "facilities/OMXV2dSTORM.php"
#          ),
        ));
        $equipment->draw_facilities_table (4);
      ?>

 <h3>Fluorescence microscopes ('Developmental systems')</h3>
 
 
      <table class="instruments">
        <tr>
          <td><a href='facilities/DeepSIM.php'><img src='images/DeepSIM2.png' width='200'></a></td>
          <td><a href='facilities/OMX-T.php'><img src='images/cryo3.png' width='200'></a></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><p>DeepSIM upright structured illumination system</p></td>
          <td><p>OMX-T cyro SIM/STORM system</p></td>
          <td></td>
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

      <h3>Additional Facilities</h3>

      <table class="instruments">
        <tr>
          <td><a href='facilities/analysis.php'><img src='images/image_suite.jpg' width='200'></a></td>
          <td><a href='facilities/preparation_lab.php'><img src='images/preparation_lab.jpg' width='200'></a></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><p>Image Analysis Suite</p></td>
          <td><p>Sample Preparation Lab</p></td>
          <td></td>
          <td></td>
        </tr>
      </table>

    </div>
    <?php include "footer.html"; ?>
  </div>
</body>

</html>

