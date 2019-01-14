<?php 
if (@mail($to, $subject, $message)) { 
 echo('<p>Mail sent successfully.</p>'); 
} else { 
 echo('<p>Mail could not be sent.</p>'); 
} 
?>
