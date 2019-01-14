<?php
header("Content-type: image/png");
$image = imagecreate( 200, 200 );
$red = imagecolorallocate($image, 255,0,0);
$blue = imagecolorallocate($image, 0,0,255 );
for ( $x=1; $x<=5; $x++ ) {
  imageString( $image, $x, (20*$x), (20*$x), "Welcome!", $blue );
}
imagepng($image);
?>
