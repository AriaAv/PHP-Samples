#!/usr/local/bin/php
<?php
$stdin = fopen('php://stdin', 'r');
	echo "Welcome to our PHP Signature file generator.\n";
  	echo "Please enter your Full Name: ";
$name = trim(fgets($stdin,100));
  	echo "Please enter your Street Address: ";
$address = trim(fgets($stdin,100));
  	echo "Please enter your City: ";
$city = trim(fgets($stdin,100));
  	echo "Please enter your State: ";
$state = trim(fgets($stdin,100));
  	echo "Please enter your Postal Code: ";
$zip = trim(fgets($stdin,100));
  	echo "Please enter your Phone Number: ";
$phone = trim(fgets($stdin,100));
  	echo "Please enter your Email Address: ";
$email = trim(fgets($stdin,100));
  	echo "What do you want to call this signature: ";
$sig = trim(fgets($stdin,100));
fclose($stdin);
$data = "$name\n$address\n$city, $state $zip\n$phone\n$email";
`copy con $sig ^Z \n`;
if (!$sigfile = fopen($sig, 'w')) {
	print "Could not open file for writing\n";
} else {
	if (!fwrite($sigfile,$data)) {
		print "\n\nFailed Writing Data\n";
	} else {
		print "\n\nYour signature is ready now\n";
	}
	fclose($sigfile);
}
?>
