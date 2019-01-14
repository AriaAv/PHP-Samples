<?php
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate ");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
?>
<html>
<head>
<title>cache sample</title>
</head>
<body>
The time is <?php print(date("D, d M Y H:i:s")); ?><br>
</body>
</html>
