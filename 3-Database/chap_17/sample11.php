<?php
$result = mysql_query("SELECT id,email FROM people ");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$length = mysql_field_len($result, 0);
echo $length;
?>
