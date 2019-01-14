<?php
exec("dir",$a);
$c=count($a);
echo "\n\t My Script Outpput";
echo "\n\t======================================\n\n";
for($i=0;$i<$c;$i++)
    echo "\t".$a[$i]."\n";
echo "\n";
?>
