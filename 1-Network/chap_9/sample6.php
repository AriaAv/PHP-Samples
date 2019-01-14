<html>
<body>
<pre>
<?php
$fp = fsockopen("192.168.0.1", 25, $errno, $errstr, 30);
if (!$fp) {
    echo "$errstr ($errno)<br />\n";
} else {
    
    $to=$_POST['to'];
    $from=$_POST['from'];
    $subject=$_POST['subject'];
    $data=$_POST['data'];

    $out = "helo mysite.com \r\n";
    fwrite($fp, $out);
    echo "\n".fgets($fp, 128);
    
    flush();
    $out = "mail from:<$from>\r\n";
    fwrite($fp, $out);
    echo fgets($fp, 128);
    
    $out = "rcpt to:<$to>\r\n";
    fwrite($fp, $out);
    echo fgets($fp, 128);
    
    $out = "data\r\n";
    fwrite($fp, $out);
    echo fgets($fp, 128);
    
    $out =date("jS of F Y, \a\\t g.i a", time());
    $out .= "\r\nFrom: <$from>\r\n";
    $out .= "Subject:  $subject\r\n";
    $out .="To: $to\r\n\r\n";
    $out .="$data\r\n.\r\n";
    fwrite($fp, $out);
    echo fgets($fp, 128);
     
    $out = "quit\r\n";
    fwrite($fp, $out);
    echo fgets($fp, 128);
    fclose($fp);
}
?>  
</body>
</html>
