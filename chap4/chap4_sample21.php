<?php
echo "<pre>";
$colors = array('red', 'blue', 'green', 'yellow');
foreach ($colors as $key => $color) {
       $colors[$key] = strtoupper($color);
}
print_r($colors);
?>
