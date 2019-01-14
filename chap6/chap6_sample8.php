<?
  error_reporting(E_ALL);
  function error_handler($number, $string, $file, $line) 
 {
    error_log("Error ($number) on line $line in file $file. The error was \"$string\"\n", 3, "errors.txt");
  }
  ini_set('display_errors',0);
  set_error_handler("error_handler");
  $b=100;
  $a=$b/0;
?>
