<?php
function date_str($timestamp)
{
   $date_str = getdate($timestamp);
   $year = $date_str["year"];
   $mon = $date_str["mon"];
   $mday = $date_str["mday"];
   $hours = $date_str["hours"];
   $minutes = $date_str["minutes"];
   $seconds = $date_str["seconds"];
   return "$hours:$minutes:$seconds $mday/$mon/$year";
}
//************************************
function file_info($file) 
{
   $file_info_array["filesize"] = number_format(filesize($file)) . " bytes.";
   $file_info_array["filectime"] = date_str(filectime($file));
   $file_info_array["filemtime"] = date_str(filemtime($file));
   if(!isset($_ENV["windir"]))
   {
       $file_info_array["fileatime"] = date_str(fileatime($file));
       $file_info_array["filegroup"] = filegroup($file);
       $file_info_array["fileowner"] = fileowner($file);
   }
   $file_info_array["filetype"] = filetype($file);
   return $file_info_array;
}
//************************************
$filename = "C:\\WINDOWS\\win.ini";
$file_info_array = file_info($filename);
echo "<center>Stats for $filename</center>";
foreach($file_info_array as $key=>$val){
   echo ucfirst($key) . "=>". $val . "<br>";
}
?>
