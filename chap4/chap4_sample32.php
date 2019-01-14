<?php
$countries = array ("e" => "United States" ,"d" => "United Kingdom",
"c" => "Canada",
"b" => "Costa Rica",
"a" => "Germany");
ksort ($countries);
while (list ($key, $val) = each ($countries)) {
echo "Element $key equals $val<BR>\n";
}
?>
