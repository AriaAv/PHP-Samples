<?
 define("EVERYTHING",E_ALL);
 define("NO_NOTICE",(E_ALL &~E_NOTICE));
 define("NO_NOTICE_OR_WARN",(E_ALL &~(E_NOTICE | E_WARNING)));
 $error_level = array(EVERYTHING,NO_NOTICE,NO_NOTICE_OR_WARN);
 for($i = 0; $i < sizeof($error_level); $i++) 
 {
    error_reporting($error_level[$i]);
    echo "<h3>Error Reporting Set To " . $error_level[$i] . "</h3>";
    echo $uninitialized;
    $connect = mysql_connect();
   echo "<hr>";
 }
?>
<?
define("EVERYTHING",E_ALL);
?>
