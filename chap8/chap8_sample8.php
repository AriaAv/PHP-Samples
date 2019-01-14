<?php
function raise(&$salary, $percent=4) 
{
     $salary += $salary * $percent/100;
}
$sal = 50000;
echo ("Pre-raise salary: $sal<BR>\n");
raise($sal); 
echo ("Post-raise salary: $sal<BR>\n");
?>
