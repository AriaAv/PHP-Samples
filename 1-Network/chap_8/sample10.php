<?php
include "mime_mail.inc";
# check whether the user has already submitted an address
if (empty($recipient)) {
?>
Please enter your e-mail address to receive the files:
<FORM>
<INPUT TYPE="text" NAME="recipient">
<INPUT TYPE="submit" VALUE=" OK ">
</FORM>
<?php
exit;
}
print "Sending files to $recipient.<p>";
# set up $mail object
$mail = new mime_mail;
$mail->from = "your@address.com";
$mail->to = $recipient;
$mail->subject = "Your files";
$mail->body = "Hello, here are your files.";
# we send only JPEGs, thus the content type is constant
$content_type = "image/jpeg";
# open current directory and search for files ending with .jpg
$dir = opendir("."); # "." is the name of the current directory
while (($filename = readdir($dir))) {
if (ereg("\.jpg$", $filename)) {
$fd = fopen($filename, "r");
$data = fread($fd, filesize($filename));
fclose($fd);
$mail->add_attachment($data, $filename, $content_type);
print "I've added $filename.<br>";
}
}
closedir($dir);
# send e-mail
$mail->send();
print "I've sent off the e-mail.";
?>
