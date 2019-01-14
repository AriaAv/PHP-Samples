<?php
$countries = array ("ca" => "Canada",
                                                "cr" => "Costa Rica",
                                                "de" => "Germany",
                                                "uk" => "United Kingdom",
                                                "us" => "United States");

while(list ($key, $val) = each ($countries)) 
        echo "Element $key equals $val<BR>\n";
?>
