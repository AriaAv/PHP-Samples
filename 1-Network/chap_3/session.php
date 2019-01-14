<?php
  session_start();
?> 
  <html>
  <head>
  <title> Registering Variables with a Session</title>
 </head>
 <body>
 <div>
 <?php
   print "session id= ".session_id() ;
   $_SESSION[' number'] = 123456789;
   $_SESSION['name'] = "hamid";
   $_SESSION['job'] = "Manager";
   print "<br><br>inforamtion have been registered";
?>
 <a href="http://192.168.0.2/receive.php">Link</a>
 </div>
 </body>
 </html>
