<?php
include "mime_mail.inc";
# create object instance
$mail = new mime_mail;
# set all data slots
$mail->from = "your@address.com";
$mail->to = "recipient@remote.net";
$mail->subject = "welcome!";
$mail->body = "Here goes the real
text of the e-mail. You can write over
multiple lines, of course.";
# send e-mail
$mail->send();
?>
