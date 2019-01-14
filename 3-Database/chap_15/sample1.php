<?php 
$connectionstring = odbc_connect("lib", "", ""); 
$query = "SELECT * FROM book"; 
$result = odbc_do($connectionstring, $query); 
odbc_result_all($result, "BORDER=1"); 
odbc_close($connectionstring); 
?>
