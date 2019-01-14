<?php
$old_file = 'somefile.txt.bak';
$new_file = 'somefile.txt';
$conn_id = ftp_connect($ftp_server);
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

if (ftp_rename($conn_id, $old_file, $new_file)) {
echo "successfully renamed $old_file to $new_file\n";
} else {
echo "There was a problem while renaming $old_file to $new_file\n";
}
ftp_close($conn_id);
?>
