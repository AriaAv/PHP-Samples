<?php
$dictionary = crack_opendict('/usr/local/lib/pw_dict')
     or die('Unable to open CrackLib dictionary');
$check = crack_check($dictionary, 'gx9A2s0x');
$diag = crack_getlastmessage();
echo $diag; 
crack_closedict($dictionary);
?>
