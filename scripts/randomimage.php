<?php
srand(time());
$num_images = 16; # i.e. we will count from 0 to $num_images-1
$random = (rand() % ($num_images-1));
$image_no = $random;
$image_path_array = array('gallery/ResearchImage',$random,'.jpg');
$caption_path_array = array('gallery/ResearchImage',$random,'.txt');
$image_path = join("",$image_path_array);
$image_caption_path = join("",$caption_path_array);
$image_caption = file_get_contents($image_caption_path);
?>
