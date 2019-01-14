<?php
  function file_put_bzip2_contents($filename,
    $content) {
    if ($fp = @bzopen($filename, 'wb')) {
      $result = bzwrite($fp, $content);
      bzclose($fp);
      return $result;
    } else {
      return false;
    }
  }
  file_put_bzip2_contents('file.txt.bz2',
    "\n> This text file contains\nsome random text. <");
  echo 'Data written to file.';
?>
