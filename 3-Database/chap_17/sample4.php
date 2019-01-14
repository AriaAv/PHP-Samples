<?
$link = mysql_connect( "localhost", "root", "654321" );
if ( ! $link ) {
  die( "Couldn't connect to MySQL" );
}
$database = "test";
mysql_select_db('test') or die( "Couldnt open $database" );
$query = 'SELECT name,publisher FROM book';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

echo "<br /><br /><table   border=1>\n";
echo "<tr><td><b> Book Name</b></td><td><b> Publisher </td></b></tr>";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
{
    echo "<tr>";
    echo "<td>".$line['name']."</td>";
    echo "<td>".$line['publisher']."</td>";
    echo "</tr>\n";
 }   

echo "</table>\n";
mysql_free_result($result);
mysql_close($link);
 ?>
