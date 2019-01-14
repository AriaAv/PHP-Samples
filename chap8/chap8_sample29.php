<?php
function sum() 
{
   $s=0;
   for($i=200;$i<=300;$i++)
        $s+=$i;
   return $s;
}
echo sum();
?>
