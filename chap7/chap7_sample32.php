<?php
echo "<pre>";
$foo = 'hello world!';
echo "\n".ucwords($foo);              

$bar = 'HELLO WORLD!';
echo "\n".ucwords(strtolower($bar)); 
?>
