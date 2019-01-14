<?php
  setcookie('foo', 'bar'); 
  header("X-Sample-Test: foo");
  header('Content-type: text/plain');
  var_dump(headers_list());
?>
