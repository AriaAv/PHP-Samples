<?
session_start();
$_SESSION['test'] = 5;
session_destroy();
$_SESSION=array();
print $_SESSION['test']; // prints nothing. The test element is no more
?>
