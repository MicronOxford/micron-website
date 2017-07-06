<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB">

<head>
  <title>Micron Oxford Advanced Bioimaging: PALM-TIRF microscope</title>
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
          use MicronOxford\Laser;
          use MicronOxford\Objective;

          $palm_tirf = new OpticalMicroscope (
            "palm_tirf",
            "PALM/TIRF",
            "New Biochemistry Room 00-060",
            array (
              new Laser (405),
              new Laser (488),
              new Laser (561),
              new Laser (640),
            ),
            array (
              new Objective (100, 1.4, "Oil"),
            )
          );
        ?>

        <?php $palm_tirf->draw_header (); ?>

        <p>
          This microscope was custom-built by the Kapanidis lab in Physics. It
          can be used for PALM and dSTORM experiments under TIRF or near-TIRF
          conditions up to 1 µm into the cell. Both methods are used to
          localise single molecules beyond the diffraction limit. TIRF and
          near-TIRF localisation is limited to 2D with no z-information.
          Localisation accuracy depends on a high number of detected photons
          and on only a fraction of molecules being in a fluorescent state at
          any one time. The latter is achieved in PALM by the activation of
          only a few fluorophores at the same time, which then bleach
          irreversibly, and in dSTORM by reversible switching between a
          fluorescent on-state and a dark off-state. PALM uses photoactivatable
          fluorescent proteins and dSTORM images fluorescent organic dyes.
          Cells need to be in an aqueous medium and for dSTORM need to be
          imaged in switching buffer.
        </p>

        <?php $palm_tirf->draw_description (); ?>

      </div>

      <div id="rightpanel">
        <img src="../images/PALM_thumb.jpg" width="200" />
        <ul>
          <li><a href="../resources/PALM_Microscope_Users_Manual.pdf">Users Manual</a></li>
          <li><a href="../resources/PALM-TIRF_Users_Protocol.pdf">Users Protocol</a></li>
        </ul>
      </div>

    </div>
    <?php include "../footer.html"; ?>
  </div>
</body>

</html>

