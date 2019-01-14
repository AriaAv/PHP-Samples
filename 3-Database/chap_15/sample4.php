<?php 
$query = "SELECT * FROM book ";
if(strlen(trim($_GET[book_name])))
{
   $query = $query." where name like '%".$_GET[book_name]."%'"; 
   if(strlen(trim($_GET[publisher])))
      $query = $query." and publisher like '%".$_GET[publisher]."%'"; 
}   
else 
  if(strlen(trim($_GET[publisher])))
     $query = $query." where publisher  like '%".$_GET[publisher]."%'"; 

$connectionstring = odbc_connect("book", "", ""); 
$result = odbc_do($connectionstring, $query); 
odbc_result_all($result, "BORDER=1"); 
odbc_close($connectionstring); 
?>
