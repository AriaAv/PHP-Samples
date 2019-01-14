<html>
<body> 
<pre>
<?php                   
$ftp_server ="192.168.0.2"; 
$ftp_user = "anonymous";
$ftp_pass = "";
$conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server"); 
if (@ftp_login($conn_id, $ftp_user, $ftp_pass)) {
  $directory_name = ftp_pwd($conn_id);
  $filesArr = ftp_nlist($conn_id,$directory_name);
  foreach($filesArr as $value)
  {
   echo $value."<br>";
   }
} else {
    echo "Couldn't connect as $ftp_user\n";
}
?>
</body> 
</html>
