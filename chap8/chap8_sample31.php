<?php
function average() 
{
   $s=0; 
   $ave=0;
   for($i=1;$i<=100;$i++)
   if($i%2==1)
      $s+=$i;
   $ave=$s/100; 
   return $ave;
}
echo average();
?>


