<?php
echo "<pre>";
$foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
next($foo);
$bar = each($foo);
print_r($bar);
?> 
