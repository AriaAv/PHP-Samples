<?php
$file = 'somefile.txt';
$remote_file = 'readme.txt';
$conn_id = ftp_connect($ftp_server);
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// upload a file
if (ftp_put($conn_id, $remote_file, $file, FTP_ASCII)) {
echo "successfully uploaded $file\n";
} else {
echo "There was a problem while uploading $file\n";
}
ftp_close($conn_id);
?>
