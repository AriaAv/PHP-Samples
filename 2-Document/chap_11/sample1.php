<?php
 echo "<pre>";
 $zip=zip_open("C:\\Inetpub\\wwwroot\\root.zip"); 
 if ($zip) 
 {
    while ($zip_entry = zip_read($zip)) 
    {
       echo "<b>Name:</b>               " . zip_entry_name($zip_entry) . "\n";
       echo "<b>Actual Filesize:</b>" . zip_entry_filesize($zip_entry) . "\n";
       echo "<b>Compressed Size:</b> ".zip_entry_compressedsize($zip_entry) . "\n";
         echo "<b>Compression Method:</b> " . zip_entry_compressionmethod($zip_entry) . "\n";
         echo "<hr>";      
      }
      zip_close($zip);
   }
?>
