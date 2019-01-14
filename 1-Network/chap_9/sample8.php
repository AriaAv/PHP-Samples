<html>
<body>
<pre>
<?php
$fp = fsockopen("192.168.0.1", 110, $errno, $errstr, 30);
if (!$fp) {
    echo "$errstr ($errno)<br />\n";
} else {

    $user=$_POST['username'];
   $pass=$_POST['password'];
    
    echo "<b>Received :</b>".fgets($fp, 128);
    
    $out = "user ".$user."\r\n";
    echo "\n<b>Send :</b>".$out;
    fwrite($fp, $out);
    echo "\n<b>Received :</b>".fgets($fp, 128);
    
    $out = "pass ".$pass."\r\n";
    echo "\n<b>Send :</b>".$out;    
    fwrite($fp, $out);
    echo "\n<b>Received :</b>".fgets($fp, 128);
    
    $out = "retr 1\r\n";
    echo "\n<b>Send :</b>".$out;        
    fwrite($fp, $out);
    echo "\n<b>Received :</b>".fread($fp, 1000);
    
    $out = "quit\r\n";
    echo "\n<b>Send :</b>".$out;            
    fwrite($fp, $out);
    echo "\n<b>Received :</b>".fgets($fp, 128);
    fclose($fp);
}
?>  
</body>
</html>
