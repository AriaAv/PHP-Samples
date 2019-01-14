<?php
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo "<pre>";
print_r($pieces); 
$str = "foo:*:1023:1000::/home/foo:/bin/sh";
$str= explode(":", $str);
print_r($str); 
?>
