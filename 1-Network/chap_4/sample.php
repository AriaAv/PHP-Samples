<?php
$userinput="mydata / ? *";
echo $userinput;
echo "<br />";
$encode_data=urlencode($userinput);
echo $encode_data;
echo "<br />";
echo urldecode($encode_data);
?>
