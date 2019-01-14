#! /usr/local/bin/php 
<?php
exec("ls -l",$a);
$c=count($a);
for($i=0;$i<$c;$i++)
{
    $count=0;
     if($a[$i][0]=="d")
    {
      print "\t".$a[$i]."\n";
    echo "\t======================================\n";
   }
}
echo "\n";
?>
