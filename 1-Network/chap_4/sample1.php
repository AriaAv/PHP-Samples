<?php
$str = "A 'quote' is <b>bold</b>";
echo htmlentities($str);
echo "<br />";
echo htmlentities($str, ENT_QUOTES);
?>
