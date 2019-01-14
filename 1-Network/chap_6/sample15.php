<?php
$command = 'dir';
$conn_id = ftp_connect("127.0.0.1");
$login_result = ftp_login($conn_id, "anonymous", "");
$remote_file="url.doc";
$local_file="test";
$ret = ftp_nb_get($conn_id, $local_file,$remote_file , FTP_BINARY);
while ($ret == FTP_MOREDATA) {
   echo ".";
   $ret = ftp_nb_continue($conn_id);
}
if ($ret != FTP_FINISHED) {
   echo "There was an error downloading the file...";
   exit(1);
}
?>
