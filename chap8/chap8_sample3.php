<?php
function newline($x) 
{
     for($i = 0; $i < $x; ++$i) 
           echo ("<BR>\n");
}
echo ("line1");
newline(3);
echo ("line2");
?>
