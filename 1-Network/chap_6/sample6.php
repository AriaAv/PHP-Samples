<?php
$dir = 'www';
$ftp_server="127.0.0.1";
$conn_id = ftp_connect($ftp_server);
$login_result = ftp_login($conn_id, "anonymous", "");
if(!$login_result)
   die("aaaaaaaaaaaaaaaaaaaaa");
                    
echo ftp_pwd($conn_id); 
ftp_close($conn_id);
?>
