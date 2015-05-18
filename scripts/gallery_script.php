<?php
    # script to get current image number, read image+caption & read     thumbs for "strip"
    #   ugly and repetitive, but it does the job

    # first deal with current main image based on URL "GET" information
    $num_images = 15;
    $image_min = 0;
    $image_max = $num_images-1;
    if( isset($_GET["image_no"]) ){
      $image_no = $_GET["image_no"];
    }else{
      $image_no = $image_min;
    }
    $image_path_base = 'gallery/ResearchImage';
    #$image_suffix = '_full.jpg';
    $image_suffix = '.jpg';
    $image_path_array = array($image_path_base,$image_no,$image_suffix);
    $caption_path_array = array($image_path_base,$image_no,'.txt');
    $image_path = join("",$image_path_array);
    $image_caption_path = join("",$caption_path_array);
    $image_caption = file_get_contents($image_caption_path);

    # now deal with the "strip" of 7 thumbnails centred on the current main image thumb
    # generate paths to thumbnails
    $thumb_suffix = '_thumb.jpg';
    $blank_thumb = 'Blank';
    # work out thumbnail numbers
    $thumb_farleft = $image_no-3;
    $thumb_midleft = $image_no-2;
    $thumb_left = $image_no-1;
    $thumb_central = $image_no;
    $thumb_right = $image_no+1;
    $thumb_midright = $image_no+2;
    $thumb_farright = $image_no+3;
    # for valid thumbnail numbers generate a path to the thumbnail; otherwise set a path to a blank image
    $thumb_farleft>$image_min-1 ? $thumb_array = array($image_path_base,$thumb_farleft,$thumb_suffix) :
      $thumb_array = $thumb_array = array($image_path_base,$blank_thumb,$thumb_suffix);
    $thumb_path_farleft = join("",$thumb_array);
    $thumb_midleft>$image_min-1 ? $thumb_array = array($image_path_base,$thumb_midleft,$thumb_suffix) :
      $thumb_array = $thumb_array = array($image_path_base,$blank_thumb,$thumb_suffix);
    $thumb_path_midleft = join("",$thumb_array);
    $thumb_left>$image_min-1 ? $thumb_array = array($image_path_base,$thumb_left,$thumb_suffix) :
      $thumb_array = $thumb_array = array($image_path_base,$blank_thumb,$thumb_suffix);
    $thumb_path_left = join("",$thumb_array);
    $thumb_array = array($image_path_base,$thumb_central,$thumb_suffix);
    $thumb_path_central = join("",$thumb_array);
    $thumb_right<$image_max+1 ? $thumb_array = array($image_path_base,$thumb_right,$thumb_suffix) :
      $thumb_array = $thumb_array = array($image_path_base,$blank_thumb,$thumb_suffix);
    $thumb_path_right = join("",$thumb_array);
    $thumb_midright<$image_max+1 ? $thumb_array = array($image_path_base,$thumb_midright,$thumb_suffix) :
      $thumb_array = $thumb_array = array($image_path_base,$blank_thumb,$thumb_suffix);
    $thumb_path_midright = join("",$thumb_array);
    $thumb_farright<$image_max+1 ? $thumb_array = array($image_path_base,$thumb_farright,$thumb_suffix) :
      $thumb_array = $thumb_array = array($image_path_base,$blank_thumb,$thumb_suffix);
    $thumb_path_farright = join("",$thumb_array);
?>
