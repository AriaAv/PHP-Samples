<?php
echo "<pre>";
for($i=1;$i<=10;$i++) 
{
   for($j=1;$j<=10;$j++) 
   {
      if($j>$i)
          break; 
       echo  "   $j";
    }
   echo  "\n";
}
?>
