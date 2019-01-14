<?php

$filename = tempnam('/tmp', 'zlibtest') . '.gz';
echo "<html>\n<head></head>\n<body>\n<pre>\n";
$s = "Only a test, test, test, test, test, test, test, test!\n";

$zp = gzopen($filename, "w9");
gzwrite($zp, $s);
gzclose($zp);

$zp = gzopen($filename, "r");
echo gzread($zp, 3);
gzpassthru($zp);
gzclose($zp);

echo "\n";
if (readgzfile($filename) != strlen($s)) {
        echo "Error with zlib functions!";
}
unlink($filename);
echo "</pre>\n</body>\n</html>\n";
?>
