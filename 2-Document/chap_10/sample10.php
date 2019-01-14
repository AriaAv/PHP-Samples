<?php
 header("Content-type: image/png");
 $image = imagecreate( 400, 200 );
 $red = imagecolorallocate($image, 255,0,0);
 $blue = imagecolorallocate($image, 0,0,255 );
 $font = 'arial.ttf';
 imageTTFtext( $image, 50, 0, 20, 100, $blue, $font, "Welcome!");
 imagepng($image);
?>
