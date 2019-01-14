<?
$count=0;
for($i=0;$i<20;$i++)
     if($i%2==0)
         $ar[$count++]=$i;
echo "<pre>";
for($i=0;$i<$count;$i++)
    printf(" %3d",$ar[$i]);
?>
