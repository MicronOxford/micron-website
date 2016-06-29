<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB">

<head>
  <title>Micron Oxford Advanced Bioimaging: DeltaVision</title>
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
          use MicronOxford\Objective;

          $bungle = new OpticalMicroscope (
            "bungle",
            "API DeltaVision Elite",
            "New Biochemistry Room 00-031",
            array (),
            array (
              new Objective (60, 1.35, "Oil UPlanSApo"),
            )
          );
        ?>

        <?php $bungle->draw_header (); ?>

        <?php $bungle->draw_description (); ?>
      </div>

      <div id="rightpanel">
        <img src="../images/elite.png" width="280" />
        <ul>
          <li><a href="http://www.api.com/deltavision-omx.asp" title="Applied Precision">Applied Precision</a></li>
        </ul>
      </div>

    </div>
    <?php include "../footer.html"; ?>
  </div>
</body>

</html>

