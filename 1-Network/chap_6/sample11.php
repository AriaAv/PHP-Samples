<?php
$file = 'public_html/old.txt';
$conn_id = ftp_connect($ftp_server);
// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// try to delete $file
if (ftp_delete($conn_id, $file)) {
echo "$file deleted successful\n";
} else {
echo "could not delete $file\n";
}
// close the connection
ftp_close($conn_id);
?>
