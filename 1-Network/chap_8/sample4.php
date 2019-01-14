<?php 
mail('recipient@some.net', 'Subject', 'Your message here.', 
    "To: The Receiver <recipient@some.net>\n" . 
    "From: The Sender <sender@some.net>\n" . 
    "X-Mailer: PHP 4.x"); 
?>
