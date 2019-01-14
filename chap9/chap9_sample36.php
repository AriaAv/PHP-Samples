<?php
$file = fopen ("http://www.myplace.com/data.txt", "r");
if (!$file) {
    echo "<p>Unable to open remote file.\n";
    exit;
}
echo "<pre>";
while (!feof ($file)) {
    $line = fgets ($file, 1024);
    echo $line;   
}
fclose($file);
?>
