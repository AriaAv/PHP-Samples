<?php
$path_parts = pathinfo('/www/htdocs/index.html');
echo $path_parts['dirname'], "\n";
echo $path_parts['basename'], "\n";
echo $path_parts['extension'], "\n";
?>
