<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB">

<head>
  <title>Micron Oxford Advanced Bioimaging: DeltaVision</title>
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

          $zippy = new OpticalMicroscope (
            "zippy",
            "API DeltaVision Core",
            "New Biochemistry Room 00-031",
            array (),
            array (
              new Objective (10, 0.40, "air UPlanApo"),
              new Objective (20, 0.75, "air UPlanSApo"),
              new Objective (40, 1.35, "oil UApo"),
              new Objective (60, 1.35, "oil UPlanSApo"),
              new Objective (100, 1.40, "oil UPlanSApo"),
            )
          );
        ?>

        <?php $zippy->draw_header (); ?>

        <h4>Applications</h4>
          <ul>
        <li> widefield fluorescence imaging</li>
        <li> brightfield</li>
        <li> multipoint</li>
        <li> time-lapse</li>
        <li> Z-stacks</li>
        <li> deconvolution</li>
          </ul>

        <?php $zippy->draw_description (); ?>

  <h4>Detector</h4>
  <p>cooled CCD camera</p>

  <h4>Fluorescence filter sets</h4>

  <table width='100%' border='1' align='left' cellpadding='4' style='padding-top: 10px; padding-bottom: 10px;'>
 <tr>
 <th colspan="3">Excitation and Emission filters</th>
 </tr>
 <tr>
  <td width='10%'><b>Channel</b></td>
  <td width='10%'><b>Excitation wavelength/bandwidth</b></td>
  <td width='10%'><b>Emission wavelength/bandwidth</b></td>
  </tr>
 <tr>
 <th colspan="3"><i>Standard</i></th>
 </tr>
  <tr>
  <td>DAPI</td>
  <td>390/18</td>
  <td>435/48</td>
  </tr>
  <tr>
  <td>FITC</td>
  <td>475/28</td>
  <td>525/48</td>
  </tr>
  <tr>
  <td>TRITC</td>
  <td>542/27</td>
  <td>597/45</td>
 </tr>
 <tr>
  <td>Cy-5</td>
  <td>632/22</td>
  <td>676/34</td>
 </tr>
 <tr>
 <th colspan="3"><i>Live Cell</i></th>
 </tr>
  <tr>
  <td>CFP</td>
  <td>438/24</td>
  <td>475/24</td>
  </tr>
  <tr>
  <td>GFP</td>
  <td>475/28</td>
  <td>525/28</td>
  </tr>
  <tr>
  <td>YFP</td>
  <td>513/17</td>
  <td>548/22</td>
  </tr>
  <tr>
  <td>mCh</td>
  <td>575/25</td>
  <td>625/45</td>
  </tr>
  <tr>
 <th colspan="3"><i>Alexa</i></th>
 </tr>
  <tr>
  <td>DAPI</td>
  <td>390/18</td>
  <td>435/48</td>
  </tr>
  <tr>
  <td>FITC</td>
  <td>475/28</td>
  <td>525/48</td>
  </tr>
  <tr>
  <td>A594</td>
  <td>575/25</td>
  <td>625/45</td>
  </tr>
  <tr>
  <td>Cy-5</td>
  <td>632/22</td>
  <td>676/34</td>
  </tr>
</table>

      </div>

      <div id="rightpanel">
        <img src="../images/zippy.png" width="280" />
                <p>&nbsp;</p>

        <ul>
          <li><a href="http://www.api.com/deltavision-omx.asp" title="Applied Precision">Applied Precision</a></li>
        </ul>
      </div>

    </div>
    <?php include "../footer.html"; ?>
  </div>
</body>

</html>
