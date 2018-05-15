<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB">

<head>
  <title>Micron Oxford Advanced Bioimaging: Graeme Ball</title>
  <meta http-equiv="Content-Type" CONTENT="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="../styles/main.css" >
  <link rel="stylesheet" type="text/css" href="../styles/person_page.css" >
  <link rel="icon" type="image/ico" href="../images/MicronMu.ico" >

</head>

<body id="people">
  <div id="container_all">
    <?php include "../headnav.html"; ?>
    <div id="mainbody">
      <div id="leftpanel">

          <h3>Graeme Ball - Image Analysis Specialist</h3>
          <p><img src="../images/graeme_thumb.jpg" alt="Graeme Ball"
                         title="Graeme Ball" width="90" height="120" ></p>
        <p id="person_intro">I am the Micron image analysis specialist. My primary 
        goal is to make new biomedical discoveries possible by providing image 
        analysis expertise and 
        <a href="http://www.micron.ox.ac.uk/facilities">facilities</a>
        to my colleagues in Micron and the researchers who come to work with 
        us. I am interested in both the biological questions people 
        are working on, and the techniques that will help them to answer these 
        questions. I moved to the field of bioimaging and image analysis after 
        a PhD in structural biology and a first postdoc that combined these 
        disciplines.</p>

        <h3>Image analysis work in Micron</h3>
        <p>Micron can help researchers to adopt the best available image analysis
          tools and workflow, which is especially important when working with
          more advanced bioimaging techniques. We have the expertise to adapt
          existing image processing and analysis tools, or create new tools where
          there is a research-driven need. There are a wealth of opportunities in
          the Oxford bioimaging community to help answer key biological questions;
          and we are also in the fortunate position to be able to benefit from
          world-leading research in the engineering, computer science and physics
          departments. Currently the main image analysis projects in Micron are:-
        </p>
        <ul>
            <li>Developing an ImageJ plugin suite, 
            <a href="http://www.micron.ox.ac.uk/software/SIMCheck">"SIMcheck"</a>,
            to assess super-resolution SIM data quality, check for the presence 
            of artifacts, and optimize the reconstruction process.</li>
          <li>Integrating image processing functionality into
            <a href="http://omero1.bioch.ox.ac.uk/">OMERO</a>
            (flat-field correction &amp; alignment, denoising, deconvolution, SI reconstruction)
            using OMERO's python scripting interface.</li>
          <li>Developing an improved single-particle tracking algorithm for studying RNP dynamics in poor
                contrast-to-noise ratio data for researchers in the
                <a href="https://sites.google.com/site/davislaboxford/home">Davis lab</a></li>
          <li>Customizing and adding functionality to the MATLAB package 
                <a href="http://microbetracker.org/">MicrobeTracker</a>
                for researchers in the 
                <a href="http://www2.bioch.ox.ac.uk/sherrattlab/">Sherratt lab</a>.</li>
          <li>Developing a faster denoising algorithm using C / CUDA GPU processing code -
              several groups are interested in the potential of denoising to enable more
              extensive sampling of dynamic events while limiting photodamage, as described
              by <a href="http://www.pnas.org/content/early/2010/08/05/1004037107">Carlton et al.</a></li>
        </ul>

        <h3>Personal research interests</h3>
        <p>To date, my work in the image processing and analysis field has focused on 
        denoising, particle detection and tracking. I plan to continue my research
        in this area, with an emphasis on application to large, multi-dimensional 
        datasets. Given the nature of Micron's bioimaging facilities, I am also
        developing new tools to complement our super-resolution capabilities.</p>
      </div>

      <div id="rightpanel">
          <h3>Publications</h3>
          <h4>2012</h4>
            <ul class="publicationlist">
              <li>Ball G, Parton RM, Hamilton RS, Davis I. 
                  A Cell Biologist's Guide to High Resolution Imaging
                  Methods Enzymol. 2012; 504, 29-.
                  E243-50. Epub 2011 Jun 13.</li>       
            </ul>
          <h4>2011</h4>
            <ul class="publicationlist">
              <li>Parton RM, Hamilton RS, Ball G, Yang L, Cullen CF, Lu W, Ohkura H, Davis I.
                  A PAR-1-ependent orientation gradient of dynamic microtubules directs posterior 
                  cargo transport in the Drosophila oocyte. JCB. 2011;  194(1):121-135.
              <li>Wang X, Lesterlin C, Reyes-Lamothe R, Ball G, Sherratt DJ. 
                  Replication and segregation of an Escherichia coli chromosome with
                  two replication origins. Proc Natl Acad Sci U S A. 2011; 108(26):
                  E243-50.</li>       
              <li>Meenan N, Ball G, Bromek K, Uhrin D, Cooper A, Kennedy M, Smith B.
                  Solution Structure of a Tandemly-Repeated Unit of the ABA-1 Polyprotein 
                  Allergen of the Nematode Ascaris Reveals a Novel Fold and Two Discrete 
                  Lipid-Binding Sites. PLOS Neglected Tropical Diseases. 2011; 5(4):e1040.</li>
            </ul>
          <h4>2010</h4>
            <ul class="publicationlist">
              <li>Hamilton RS, Parton RM, Oliveira RA, Vendra G, Ball G, Nasmyth K, Davis I.
                  ParticleStats: open source software for the analysis of particle motility 
                  and cytoskeletal polarity. Nucleic Acids Research. 2010; 38:W641-</li>
              <li>Yang L, Parton R, Ball G, Qiu Z, Greenaway AH, Davis I, Lu W.
                  An Adaptive Non-local Means Filter for Denoising Live Cell Images and 
                  Improving Particle Detection. J. Struct. Biol. 2010; 172:233-.
              </li>
            </ul>
      </div>

    </div>
    <?php include "../footer.html"; ?>
  </div>
</body>

</html>

