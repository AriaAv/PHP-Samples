<?php
$counter_file = "./count.dat";
if(!($fp = fopen($counter_file, "r")))   die ("Cannot open $counter_file.");
do{
   $one_char = fgetc($fp);
   $counter .= $one_char;
} while($one_char);
$counter = (int) $counter;
fclose($fp);

//***************
$counter++;
echo "You're visitor No. $counter.";
$fp = fopen($counter_file, "w");
fwrite($fp, $counter);
fclose($fp);
?>
