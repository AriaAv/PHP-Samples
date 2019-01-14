<?php
$color = array (
"0" => "red" ,
"1" => "yellow",
"2" => "blue",
"3" => "black",
"4" => "green",
"5" => "brown");

$ints = range (1, 6);
$v=$ints;
srand (time());
shuffle ($ints);
while (list ( $val, $color) = each ($ints)) {
echo "$val<BR>\n";
}
?>
