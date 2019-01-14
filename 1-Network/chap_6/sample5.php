<?php
$dir = 'www';
$ftp_server="127.0.0.1";
$conn_id = ftp_connect($ftp_server);
$login_result = ftp_login($conn_id, "anonymous", "");
if(!$login_result)
   die("Can not connect");

if (ftp_mkdir($conn_id, $dir)) {
echo "successfully created $dir\n";
} else {
echo "There was a problem while creating $dir\n";
}
ftp_close($conn_id);
?>
