<?php
 session_start();
  ?>
  <html>
  <head>
  <title>Accessing Session Variables</title>
 </head>
 <body>
 <div>
 <?php  print "Your Information:<br><br> ";  ?>
 <ul>
 <li><?php print " number =".$_SESSION['id']; ?></li>
 <li><?php print "name =".$_SESSION['name']; ?></li>
 <li><?php print "job =".$_SESSION['job']; ?></li>
 </ul>
 </div>
 </body>
 </html>
