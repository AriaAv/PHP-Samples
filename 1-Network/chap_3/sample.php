<?php
  session_start();
?>
<html>
<head>
<title>Starting or Resuming a Session</title>
</head>
<body>
<?php
 print "<p>Welcome, your session ID is ".session_id()."</p>\n\n";
?>
</body>
</html>
