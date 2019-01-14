<?php
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

$newstring = 'abcdef abcdef';
$pos = strpos($newstring, 'a', 1); 
?> 
