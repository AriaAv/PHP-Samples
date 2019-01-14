<?php
function by_length ($a, $b) {
$l_a = strlen ($a);
$l_b = strlen ($b);
if ($l_a == $l_b) return 0;
return ($l_a < $l_b) ? -1 : 1;
}
$countries = array ("e" => "United States" ,
"d" => "United Kingdom",
"c" => "Canada",
"b" => "Costa Rica",
"a" => "Germany");
usort ($countries, by_length);
while (list ($key, $val) = each ($countries)) {
echo "Element $key equals $val<BR>\n";
}
?>
