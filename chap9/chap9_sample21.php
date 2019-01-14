<?php
   $filename = 'somefile.txt';
   clearstatcache ( );
   if (file_exists($filename)) {
        echo "$filename was last accessed: " . 
       date("F d Y H:i:s.", fileatime($filename));
   }
?>
