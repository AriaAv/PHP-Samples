<?php
$cats = array("Persian", "Manx", "Siamese");
for ($i = 0; $i < count($cats); $i++) {
if($cats[$i] == "Manx") 
     unset($cats[$i]);

echo("$i: $cats[$i]<BR>");
}
?> 
