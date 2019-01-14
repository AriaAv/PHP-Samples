<?php
$remote=$_SERVER[REMOTE_ADDR];
if(strncmp("141.190.17", $remote , 10) != 0)
{
    header("HTTP/1.0 403 Forbidden");
  ?>
    <html>
    <head><title>Marketing Department</title></head>
    <body>
      <h2>403 Forbidden</h2>
      <p>You cannot access this page from outside 
         the Marketing Department.
    </body>
  </html>
  <?
  exit;
}
?>
<html>
  <head><title>Marketing Department</title></head>
  <body>
    <h2>Marketing secrets!</h2>
    <p>Need new development team - the old one
      says <em>No</em> far too often.
  </body>
</html>
