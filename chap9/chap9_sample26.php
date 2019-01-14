<?php
$default_dir = "c:\\";
if(!($dp = opendir($default_dir))) 
       die("Cannot open $default_dir.");
while($file = readdir($dp))   
        $filenames[]=$file;
closedir($dp);
sort($filenames);
for($i=0;$i<count($filenames);$i++)
          echo  $filenames[$i] ."<br>";
?>
