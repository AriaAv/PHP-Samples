<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ');
}
echo 'Connected successfully';
mysql_close($link);
?>
