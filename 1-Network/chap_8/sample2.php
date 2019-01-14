<?php
mail("recipient@domain.com,another@foo.com",
"This is the subject",
"body of the message");
?>
To construct the recipient string out of an array, 
you use the implode()function.

<?php
$recipients = array("user1@foo.com", "user2@bar.net");
$recipient_list = implode(",", $recipients);
?>
