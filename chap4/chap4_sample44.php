<?php
$arr=array( array(0,1,0,0,1),
                   array(1,1,0,0,1),
                   array(1,1,0,1,1),
                   array(0,0,0,0,1));

echo "<pre>";
for($i=0;$i<4;$i++)
      for($j=0;$j<5;$j++)
           if($arr[$i][$j]==1)  
                 printf("\n  %5d   %5d",$i,$j);          
?>
