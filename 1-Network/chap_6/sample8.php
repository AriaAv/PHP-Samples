<?php
$conn_id = ftp_connect($ftp_server);
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
ftp_chdir($conn_id, 'html');
echo ftp_pwd($conn_id); 

if (ftp_cdup($conn_id)) { 
  echo "cdup successful\n";
} else {
  echo "cdup not successful\n";
}
echo ftp_pwd($conn_id); 
ftp_close($conn_id);
?>
