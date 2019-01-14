<?
function error_handler($number, $string, $file, $line)
{
    $timestamp = date("m-d-Y H:i:s (T)");
    switch($string) {
      case("INVALID LOGIN"):
         global $username;
        error_log("Failed login attempt by $username on $timestamp\n",3,"failed_logins.txt");
         break;
       case("DATABASE CONNECT ERROR"):
        global $mysqlerr;
        $message = "Database Error!\n";
        $message .= "Unable to connect to database at $timestamp\n\n";
        $message .= "ERROR INFORMATION:\n";
        $message .= "FILE:\t$file\n";
        $message .= "LINE:\t$line\n";
        $message .="MYSQL:\t$mysqlerr\n";
        error_log($message,1,"me@example.com", "FROM: PHP MONITOR <noreply@example.com>");
        failure();
        break;
      default:
        if($number != 8) {
          error_log("Error ($number) on line $line in file $file. The error was \"" . 
                           trim($string) . "\"\n", 3, "error_log.txt");
        }
        break;
    }
}
//*****************************************
  function failure() {
    ?>

    <h3>Sorry,</h3>
    <p>A problem has occured. The site administators have been notified and the problem 
should be resolved shortly.
    <p>Please try again later.

<?
  }
  set_error_handler("error_handler");
  if(!mysql_connect()) {
    $mysqlerr = mysql_error();
    trigger_error("DATABASE CONNECT ERROR",E_USER_NOTICE);
  }
  $username = "bob";
  trigger_error("INVALID LOGIN",E_USER_NOTICE);
  $msg = "Something Went Wrong!";
  trigger_error($msg,E_USER_ERROR);
?>
