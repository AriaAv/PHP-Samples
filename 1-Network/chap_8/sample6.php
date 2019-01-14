<?php 
mail('recipient@some.net', 'Subject', 
    '<html><body><p>Your <i>message</i> here.</p></body></html>', 
    "To: The Receiver <recipient@some.net>\n" . 
    "From: The Sender <sender@some.net>\n" . 
    "MIME-Version: 1.0\n" . 
    "Content-type: text/html; charset=iso-8859-1"); 
?>
