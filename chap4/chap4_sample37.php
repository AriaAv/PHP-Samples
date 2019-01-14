<?php
$arr1 = array(2, 3);
$arr2 = &$arr1;
$arr2[] = 4; 
echo "<pre>";
print_r($arr1);
echo "\n";
print_r($arr2);
?>
