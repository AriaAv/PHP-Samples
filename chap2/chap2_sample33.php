<?php
$foo = 10;            
$str = "$foo";        
$fst = (string) $foo; 
if ($fst === $str) {
    echo "they are the same";
}
?> 
