#! /usr/local/bin/php 
<?php
exec("ls -l",$a);
$c=count($a);
for($i=0;$i<$c;$i++)
{
  $count=0;
  for($j=1;$j<=10;$j++)
     if($a[$i][$j]=="x")
        $count++;
  if($count==3)
  {
    print "\t".$a[$i]."\n";
    echo "\t======================================\n";
   }
}
echo "\n";
?>
