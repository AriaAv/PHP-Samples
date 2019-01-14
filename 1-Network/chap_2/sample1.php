Here is some text. The next setcookie() will fail,
because we have already sent
information to the browser.
<?php
$count=$_COOKIE["count"];
$count++;
setcookie("count", $count,time()+3600);
?>
...
