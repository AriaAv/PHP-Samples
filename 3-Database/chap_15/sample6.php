<?php 
if(!strlen(trim($_GET['id'])))
{
   echo "please enter book id";
   die(); 
}
$query ="insert into book values(";
$query = $query.$_GET['id'].","; 
$query = $query."'".$_GET['name']."',"; 
$query = $query."'".$_GET['publisher']."',"; 
$query = $query."'".$_GET['date']."',"; 
$query = $query."'".$_GET['price']."',"; 
$query = $query."'".$_GET['note']."')"; 
echo  $query;
$connectionstring = odbc_connect("lib", "", ""); 
$result = odbc_do($connectionstring, $query); 
odbc_close($connectionstring); 
?>
