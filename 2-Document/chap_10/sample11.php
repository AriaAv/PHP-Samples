<?
   $image = ImageCreateFromPNG("aa.png");
   $white = ImageColorAllocate($image,255,255,255);
   $font = "arial.ttf";
   if(isset($_GET[text]))
     $text = $_GET[text]; 
   else
      $text = "BUTTON"; 
   $size = "20";
   $angle="0";
   $textbox = ImageTTFBbox($size, $angle, $font, $text);
   $textbox_width = abs($textbox[2] - $textbox[0]);
  $textbox_height = abs($textbox[7] - $textbox[1]);
  $image_width = ImageSX($image);
  $image_height = ImageSY($image);
  $x = ($image_width - $textbox_width) / 2;
  $y = ($image_height - $textbox_height) / 2 + $textbox_height;
  ImageTTFText($image, $size, $angle, $x, $y, $white, $font, $text);
  Header("Content-type: image/png");
  ImagePNG($image);
  ImageDestroy($image);
?>
