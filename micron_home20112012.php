<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
  <title>Micron Oxford Advanced Bioimaging Unit</title>
  <meta name=description content="Advanced microscopy at Micron Oxford">
  <meta name=keywords content="Advanced microscopy, Bioimaging, Super-resolution, Localization microscopy, Image Analysis, Wellcome Trust">
  <meta http-equiv="Content-Type" CONTENT="text/html; charset=ISO-8859-1">
  <meta name=robots content="index,follow">
  <link rel="stylesheet" type="text/css" href="styles/micron_main.css" >
  <link rel="stylesheet" type="text/css" href="styles/micron_home.css" >
  <link rel="icon" 
      type="image/ico" 
      href="images/MicronMu.ico" >
</head>


<!-- Body has container_all which is divided into header, navigation, mainbody, footer -->
<body id="home">

  <div id="container_all">

    <!-- include html file containing header and navigation divs common to all pages -->
    <?php include 'micron_headnav.html'; ?>

    <div id="mainbody"> 
    <!-- mainbody is subdivided into leftpanel and smaller rightpanel -->

      <div id="leftpanel">
        <p id="statement"> 
          Micron Oxford is located within the 
          <a href="http://www.bioch.ox.ac.uk">Department of Biochemistry</a>
          and the <a href="http://www.path.ox.ac.uk/">
          Dunn School of Pathology</a> in the South Parks Road science area at the 
          University of Oxford, and is funded by a strategic award from the 
          <a href="http://www.wellcome.ac.uk">Wellcome Trust</a>.
          We are a collaborative, multidisciplinary bioimaging unit working with
          biomedical researchers in the Oxford area and beyond to apply advanced cellular imaging techniques to address key questions in biology. We are focusing on the development and use of single molecule methods, light sheet and <a href="micron_research.shtml#AdvancedBioimaging">super-resolution microscopy</a>. 
        </p>
        <!-- get a random image name from the gallery using chooseimage script -->
<!-- get a random image name from the gallery using chooseimage script -->
<?php include 'scripts/randomimage.php' ; ?>
<a href="micron_gallery.php?image_no=<?php print $image_no ?>">
<img id="resimage" src="<?php print $image_path ?>"  width="579" height="410"
         alt="Research image from gallery" title="View image in gallery" ></a>
<p id="imlegend"><span class="smalltxt">
<?php print $image_caption ?></span>
</p>
        <ul>
          <li><a href="micron_gallery.php" 
            title="more research images">more research images</a></li>
          <li>view our <a href="research/micron_publications.shtml" 
            title="publications">Publications</a> and our <a href="micron_research.shtml" 
            title="research">Research</a></li>

        </ul> 
        
      </div>

      <div id="rightpanel">
        <!-- group photo with mapped image and links to individuals -->
          <img id="groupim" src="images/MicronGroup.jpg"  width="280" height="200"
              alt="Micron group photo, December 2011." usemap="#groupmap" >
          <map name="groupmap">
            <area shape="rect" coords="24,45,37,89" href="http://www.bioch.ox.ac.uk/aspsite/index.asp?pageid=573" 
              title="Ilan" alt="Ilan" >
            <area shape="circle" coords="61,49,8" href="http://www.bioch.ox.ac.uk/aspsite/index.asp?pageid=568" 
              title="Neil" alt="Neil" >
            <area shape="rect" coords="75,37,89,76" href="people/Ian.shtml" 
              title="Ian" alt="Ian" >
            <area shape="rect" coords="99,42,114,93" href="people/Eva.shtml" 
              title="Eva" alt="Eva" >
            <area shape="rect" coords="127,38,148,93" href="people/Graeme.shtml" 
              title="Graeme" alt="Graeme" >
            <area shape="circle" coords="165,41,9" href="people/Lothar.shtml" 
              title="Lothar" alt="Lothar" >
            <area shape="rect" coords="173,34,190,91" href="people/Rainer.shtml" 
              title="Rainer" alt="Rainer" >
            <area shape="circle" coords="214,44,12" href="people/Richard.shtml" 
              title="Richard" alt="Richard" >
            <area shape="rect" coords="232,34,256,92" href="people/Alan.shtml" 
              title="Alan" alt="Alan" >
            <area shape="rect" coords="63,6,151,33" href="http://saltbridges.bioch.ox.ac.uk"
              title="the Birds" alt="New Biochemistry artwork" >
          </map>
        <!-- useful info about Micron -->
          <div id=moreinfo>
            <?php include 'scripts/logViewerIP.php' ; ?>
            <?php include 'scripts/checkViewerIP.php' ; ?>
            <ul>
              <li><a href="micron_about.shtml">Contact us</a></li>
              <li><a href="micron_people.shtml">People</a></li>
              <li><a href="micron_resources.php">FAQs</a></li>
              <li><a href="<?php print $wikilink ?>" 
                  title="wiki (snapshot for external viewers)">
                Wiki <img id="wikiIcon" src="images/MicronWikiFav.jpg" alt="Micron wiki" 
                  width="12" height="12" ></a></li>
            </ul>
          </div>
          <br>

        <!-- latest Micron News & events from Twitter -->
        <script src="http://widgets.twimg.com/j/2/widget.js" type="text/javascript"></script>
        <div id="newswidget">
            <script type="text/javascript">
            new TWTR.Widget({
              version: 2,
              type: 'profile',
              rpp: 12,
              interval: 30000,
              title: 'News &amp; events',
              subject: 'at Micron Oxford',
              width: 280,
              height: 240,
              theme: {
                shell: {
                  background: '#002147',
                  color: '#ffffff'
                },
                tweets: {
                  background: '#ffffff',
                  color: '#666',
                  links: '#002147'
                }
              },
              features: {
                scrollbar: true,
                loop: false,
                live: true,
                behavior: 'all'
              }
            }).render().setUser('MicronOxford').start();
            </script>
        </div>

      </div>

    </div>

    <!-- include html file containing footer div common to all pages -->
    <?php include 'micron_footer.html'; ?>

  </div>
</body>


</html>

