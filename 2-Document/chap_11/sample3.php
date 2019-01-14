<?php
$file = "/tmp/foo.bz2";
$bz = bzopen($file, "r") or die("Couldn't open $file");
$decompressed_file = '';
while (!feof($bz)) {
  $decompressed_file .= bzread($bz, 4096);
}
bzclose($bz);
echo "The contents of $file are: <br />\n";
echo $decompressed_file;
?>
