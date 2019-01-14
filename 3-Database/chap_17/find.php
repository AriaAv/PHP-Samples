<?php 
$query = "SELECT * FROM book ";
if(strlen(trim($_GET[book_name])))
{
   $query = $query." where name like '%".$_GET[book_name]."%'"; 
   if(strlen(trim($_GET[publisher])))
      $query = $query." and publisher like '%".$_GET[publisher]."%'"; 
}   
else if(strlen(trim($_GET[publisher])))
     $query = $query." where publisher  like '%".$_GET[publisher]."%'"; 
//*********************************************************
 
$link = mysql_connect( "localhost", "root", "654321" );
if ( ! $link ) 
  die( "Couldn't connect to MySQL" );
$database = "test";
mysql_select_db('test') or die( "Couldnt open $database" );
$result = mysql_query($query) or die('Query failed: ' . mysql_error());
$col_num=mysql_num_fields ($result);
echo "<br /><br /><table   border=1>\n";
echo "<tr>";
for($i=0;$i<$col_num;$i++)
  echo"<td><b>".mysql_field_name($result,$i)."</b></td>";
echo "</tr>";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
{
    echo "<tr>";
    for($i=0;$i<$col_num;$i++)
    {
      $col=mysql_field_name($result,$i);
      echo"<td>".$line[$col]."</td>";
    }   
    echo "</tr>\n";
 }
echo "</table>\n";
mysql_free_result($result);
mysql_close($link);
?>
