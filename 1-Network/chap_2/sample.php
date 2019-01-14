<?php
$count=$_COOKIE["count"];
$count++;
setcookie("count", $count,time()+3600);
?>
Welcome! You have seen this site
<? echo($count.($count==1?" time!":" times!"));?>
