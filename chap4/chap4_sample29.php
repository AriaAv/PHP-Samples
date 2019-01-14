<?php
$countries = array ("us", "uk", "ca", "cr", "de");
sort ($countries);
while (list ($key, $val) = each ($countries)) {
echo "Element $key equals $val<BR>\n";
}
?>
