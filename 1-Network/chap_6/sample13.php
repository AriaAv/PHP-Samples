<?php
$command = 'dir';
$my_connection = ftp_connect("127.0.0.1");
$login_result = ftp_login($my_connection, "anonymous", "");
$ret = ftp_nb_put($my_connection, "test", "test", FTP_BINARY);
while ($ret == FTP_MOREDATA) {
   echo ".";
   $ret = ftp_nb_continue($my_connection);
}
  if ($ret != FTP_FINISHED) {
   echo "There was an error uploading the file...";
   exit(1);
}
?>
