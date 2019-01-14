<?php
  $url = 'http://127.0.0.1';
  print_r(get_headers($url));
  print_r(get_headers($url, 1));
?>
