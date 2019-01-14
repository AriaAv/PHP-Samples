<?php
$dir = 'www';
$ftp_server="127.0.0.1";
$conn_id = ftp_connect($ftp_server);
$login_result = ftp_login($conn_id, "anonymous", "");
if ((!$conn_id) || (!$login_result)) {
    die("FTP connection has failed !");
}
$local_file = 'local.zip';
$server_file = 'server.zip';
if (ftp_get($conn_id, $local_file, $server_file, FTP_BINARY)) {
    echo "Successfully written to $local_file\n";
} else {
    echo "There was a problem\n";
}
ftp_close($conn_id);
?>
