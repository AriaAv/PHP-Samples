<?php
$count=$_COOKIE["count"];
$count++;
header ("Set-Cookie: count=$count; expires=time()+3600 ");
?>
Welcome! You have seen this site
<? echo($count.($count==1?" time!":" times!"));?>
