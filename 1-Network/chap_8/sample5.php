<?php 
mail('recipient@some.net, someone@some.net, metoo@some.net', 
    'Subject', 'Your message here.', 
    "To: The Receiver <recipient@some.net>\n" . 
    "From: The Sender <sender@some.net>\n" . 
    "cc: Interested <someone@some.net>\n" . 
    "Bcc: Me Too <metoo@some.net>\n" . 
    "X-Mailer: PHP 4.x"); 
?>
