<?php
 header("Content-type: image/png");
 $image = imagecreate( 200, 200 );
 $red = imagecolorallocate( $image, 255, 0, 0 );
 imagepng($image);
?>
