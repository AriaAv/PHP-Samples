<?php
$counter_file = "./count.dat";
$image_dir="./images";
if(!($fp = fopen($counter_file, "r"))) die ("Cannot open $counter_file.");
$counter = (int) fread($fp,20);
fclose($fp);
$counter++;
for ($i=0;$i<strlen($counter);$i++) {
      $image_src=$image_dir."/".substr($counter,$i,1).".gif";
      $image_tag_str.="<img src=\"$image_src\"border\"0\">;
}
echo "You're visitor No. $counter.";
$fp = fopen($counter_file, "w");
fwrite($fp, $counter);
fclose($fp);
?>
