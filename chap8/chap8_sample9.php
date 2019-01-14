<?php
function raise (&$salary, $percent = 4) {
$salary += $salary * $percent/100;
}
raise(50000); 
?>
