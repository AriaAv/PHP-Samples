<?php
  $file = 'C:\WINDOWS\system32\win.com';
  if (is_executable($file)) 
      echo $file.' is executable';
  else 
       echo $file.' is not executable';
?> 
