<?php
$position = "m";
function change_pos() {
$GLOBALS["position"] = "b";
}
change_pos();
echo ("$position"); 
?>
