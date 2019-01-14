<?php 
if(!strlen(trim($_GET['id'])))
  die("please enter book id"); 
$query ="insert into book values(";
$query = $query.$_GET['id'].","; 
$query = $query."'".$_GET['name']."',"; 
$query = $query."'".$_GET['publisher']."',"; 
$query = $query."'".$_GET['date']."',"; 
$query = $query."'".$_GET['price']."',"; 
$query = $query."'".$_GET['note']."')"; 

$link = mysql_connect( "localhost", "root", "654321" );
if ( ! $link ) {
  die( "Couldn't connect to MySQL" );
}
$database = "test";
mysql_select_db($database) or die( "Couldnt open $database" );
mysql_query($query) or die('Query failed: ' . mysql_error());
mysql_close($link);
?>
