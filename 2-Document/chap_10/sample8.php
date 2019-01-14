<?php
  header("Content-type: image/png");
  $image = imagecreate( 200, 200 );
  $red = imagecolorallocate($image, 255,0,0);
  $blue = imagecolorallocate($image, 0,0,255 );
  $points = array (   10, 10,
       190, 190,
       190, 10,
       10, 190
       );
 imagefilledpolygon( $image, $points, count( $points )/2 , $blue );
 imagecolortransparent( $image, $red );
 imagepng($image);
 ?>
