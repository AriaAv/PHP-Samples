<?php
$groupid   = posix_getegid();
$groupinfo = posix_getgrgid($groupid);
print_r($groupinfo);
?>
