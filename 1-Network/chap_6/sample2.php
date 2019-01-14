<?php                   
$ftp_server = "ftp.example.com";
$ftp_user = "foo";
$ftp_pass = "bar";

$conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server"); 
if (@ftp_login($conn_id, $ftp_user, $ftp_pass)) {
    echo "Connected as $ftp_user@$ftp_server\n";
} else {
    echo "Couldn't connect as $ftp_user\n";
}
?>
