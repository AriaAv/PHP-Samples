<?php
$conn_id = ftp_connect($ftp_server); 
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 

if ((!$conn_id) || (!$login_result)) {
    die("FTP connection has failed !");
}
echo "Current directory: " . ftp_pwd($conn_id) . "\n";
if (ftp_chdir($conn_id, "somedir")) {
    echo "Current directory is now: " . ftp_pwd($conn_id) . "\n";
} else { 
    echo "Couldn't change directory\n";
}
ftp_close($conn_id);
?>
