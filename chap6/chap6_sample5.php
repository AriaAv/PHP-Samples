<?
 echo "<p>Sending Error To Apache Error Log.";
 error_log("Test Error Message!",0);
 echo "<p>Sending Error To Email.";
 error_log("Test Error Message!",1,"admin@example.com","FROM: WEB
  ERROR LOG <error@example.com>");
  echo "<p>Sending Error to File.";
  error_log("Test Error Message!\r\n",3,"errors.txt");
?>

