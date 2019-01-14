<?php
    $dir = opendir($dirname);
    while($entry = readdir($dir))
    {
        $files[] = $entry;
    }
?>
