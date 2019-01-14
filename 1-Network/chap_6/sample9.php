<?php
$file = 'somefile.txt';
$conn_id = ftp_connect($ftp_server);
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// get the size of $file
$res = ftp_size($conn_id, $file);

if ($res != -1) {
    echo "size of $file is $res bytes";
} else {
    echo "couldn't get the size";
}
// close the connection
ftp_close($conn_id);
?>
