    <?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
  die("Not connected : ".mysql_errno($link) ." ".mysql_error($link)."\n");
}
$db_selected = mysql_select_db('foo', $link);
if (!$db_selected) {
  die(mysql_errno($link) ." ".mysql_error($link));
}
?>
