<?php
$foo = "5bar"; 
$bar = true;    

settype($foo, "integer"); 
settype($bar, "string");  
echo var_dump($foo); 
echo var_dump($bar);
?> 
