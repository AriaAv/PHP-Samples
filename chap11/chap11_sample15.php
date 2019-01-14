<?php
echo "<pre>";
echo min(2, 3, 1, 6, 7)."\n";
echo min(array(2, 4, 5))."\n";

echo min(0, 'hello')."\n";
echo min('hello', 0)."\n";
echo min('hello', -1)."\n";

$val = min(array(2, 4, 8), array(2, 5, 1))."\n";
$val = min('string', array(2, 5, 7), 42)."\n";
?>
