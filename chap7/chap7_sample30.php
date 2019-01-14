<?php
echo "<pre>";
echo substr('abcdef', 1) ."\n";      
echo substr('abcdef', 1, 3).”\n”;   
echo substr('abcdef', 0, 4).”\n”;   
echo substr('abcdef', 0, 8).”\n”;   

$string = 'abcdef';
echo $string{0}.”\n”;                  
echo $string{3}.”\n”;                  
echo $string{strlen($string)-1}.”\n”; 
?> 
