<?php
  $filename = __FILE__;
  $bzip2file = "$filename.bz2";

  $data = file_get_contents(__FILE__);
  echo 'Loaded file (size: ' . strlen($data) . ').<br />';

  file_put_contents("compress.bzip2://$bzip2file", $data);
  echo 'Bzipped file (new size: ' . filesize($bzip2file) . ').<br />';

  $data = file_get_contents("compress.bzip2:// $bzip2file");
  echo 'Original file size: ' . strlen($data) . '.';
?>
