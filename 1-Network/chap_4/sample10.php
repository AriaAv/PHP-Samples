<?php
  $filename = 'httpfile.zip';
  $mimetype = 'application/zip';
  $data = file_get_contents($filename);
  $size = strlen($data);
  header("Content-Disposition: attachment; filename= $filename");
  header("Content-Length: $size");
  header("Content-Type: $mimetype");
  echo $data;
?>
