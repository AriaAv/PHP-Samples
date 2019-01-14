<?php
echo "<pre>";
for($i=1;$i<=10;$i++) 
{
   for($j=1;$j<=$i;$j++) 
   {
      if($i==5)
          break(2); 
       echo  "   *";
    }
   echo  "\n";
}
?>
