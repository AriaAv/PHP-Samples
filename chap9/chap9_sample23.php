<?php
$filename = “./counter.php”;
$filegroup=filegroup($filename);
$fileowner=fileowner($filename);
filetype=filetype($filename);
if($filetype==’dir’) {
   echo “$filename is a directory.”;
} else if (is_file($filename)) {
      echo “$filename is a file.”;
} else {
      echo “$filename is neither a directory nor a file.”;
}
echo “it belong to user no.$fileowner and group no.$filegroup.<br>”;
echo “<br>the user $fileowner info<br>”;
$user_info_array=posix_getpwuid($fileowner);
foreach ($user_info_array as $key => $val) {
echo “$key => $val<br>”;
}
?>
