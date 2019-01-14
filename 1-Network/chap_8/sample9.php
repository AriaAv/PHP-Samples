<?php
include "mime_mail.inc";
$filename = "testfile.jpg";
$content_type = "image/jpeg";
# read a JPEG picture from the disk
$fd = fopen($filename, "r");
$data = fread($fd, filesize($filename));
fclose($fd);
# create object instance
$mail = new mime_mail;
# set all data slots
$mail->from = "your@address.com";
$mail->to = "recipient@remote.net";
$mail->subject = "welcome!";
$mail->body = "Here goes the real
text of the e-mail. You can write over
multiple lines, of course.";
# append the attachment
$mail->add_attachment($data, $filename, $content_type);
# send e-mail
$mail->send();
?>
