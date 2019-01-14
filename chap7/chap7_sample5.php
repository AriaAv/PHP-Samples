<?php
$products = array (
       "Green armchair"=>222.4,
       "Candlestick"=>4,
       "Coffee table"=>80.6
       );
print "<pre>";
printf ("%-20s%20s\n", "Name", "Price");
?>

<hr>

<?php
foreach ( $products as $Key=>$val ) {
   printf ("%-20s%20.2f\n", $Key, $val);
 }
print "</pre>";
?>
