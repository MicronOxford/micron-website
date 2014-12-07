<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB">

<head>
  <title>Micron Oxford Advanced Bioimaging: Image gallery</title>
  <meta name=description content="Research images at Micron Oxford">
  <meta name=keywords content="Advanced microscopy, Bioimaging, Images">
  <meta http-equiv="Content-Type" CONTENT="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="styles/main.css" >
  <link rel="stylesheet" type="text/css" href="styles/gallery.css" >
  <link rel="icon" type="image/ico" href="images/MicronMu.ico" >
  <script src="google_analytics.js"></script>
</head>

<body id="news">
  <div id="container_all">

    <?php include "headnav.html"; ?>
    <?php include "scripts/gallery_script.php"; ?>

    <div id="mainbody">

      <h3>Micron reasearch image gallery</h3>
      <!-- TBD: display the research image/movie at its real pixel resolution upon click -->
      <div id="bigimage">
        <img id="resimage" src="<?php print $image_path ?>"  
          alt="research image" title="view at full resolution (not yet implemented)" width="579" height="410" >
      </div>
      <div id="legend">
        <p id="imlegend">
          <?php print $image_caption ?>
        </p>
      </div>
      <br>

      <div id="gallerynav">
        <ul>
          <li><a href="gallery.php?image_no=<?php $image_no-1>-1? print $image_no-1 : print 0 ?>">
            <span class="menutxt">&lt; Previous image</span></a></li>
          <li><a href="gallery.php?image_no=<?php $image_no+1<10? print $image_no+1 : print 9 ?>">
            <span class="menutxt">Next image &gt;</span></a></li>
        </ul>
      </div>
      <br>
      
      <div id="gallerystripdiv">
        <table id="gallerystrip">
          <tr>
            <td><img class="resImThumb" src="<?php print $thumb_path_farleft ?>" alt="Research image"
                 width="90" height="55" ></td>
            <td><img class="resImThumb" src="<?php print $thumb_path_midleft ?>" alt="Research image"
                 width="90" height="55" ></td>
            <td><img class="resImThumb" src="<?php print $thumb_path_left ?>" alt="Research image"
                 width="90" height="55" ></td>
            <td id="curr"><img class="resImThumb" src="<?php print $thumb_path_central ?>" alt="Research image"
                 width="90" height="55" ></td>
            <td><img class="resImThumb" src="<?php print $thumb_path_right ?>" alt="Research image"
                 width="90" height="55" ></td>
            <td><img class="resImThumb" src="<?php print $thumb_path_midright ?>" alt="Research image"
                 width="90" height="55" ></td>
            <td><img class="resImThumb" src="<?php print $thumb_path_farright ?>" alt="Research image"
                 width="90" height="55" ></td>
          </tr> 
        </table>
      </div>
      <div id="backdiv">
        <a href="news.php#gallery">back to News &amp; Media</a>
      </div>

    </div>
    <?php include "footer.html"; ?>
  </div>
</body>

</html>

