<?php
 header("Content-type: image/png");
 $image = imagecreate( 200, 200 );
 $red = imagecolorallocate($image, 255,0,0);
 $blue = imagecolorallocate($image, 0,0,255 );
 imagefilledrectangle( $image, 19, 19, 179, 179, $blue );
 imagepng( $image );
?>
