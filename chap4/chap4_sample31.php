<?php
$countries = array ("us" => "United States",
"uk" => "United Kingdom",
"ca" => "Canada",
"cr" => "Costa Rica",
"de" => "Germany");
asort ($countries); 
while (list ($key, $val) = each ($countries)) {
echo "Element $key equals $val<BR>\n";
}
?>
