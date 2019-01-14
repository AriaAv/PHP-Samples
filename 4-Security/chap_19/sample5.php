<?
$password_file = "C:\\sss.txt";
$user=$_POST['adduser'];
$pass=$_POST['addpass'];
if(!$fh = fopen($password_file, "a+")) 
     die("<P>Could Not Open Password File"); 
     
if(trim($user)=="" || trim($pass)=="")    
{
      echo "<br><h2><font color='red'>"." Please enter username and password</font></h2> ";
      echo "<hr width=50% align=left>";
      include "login.htm";
}    
else
{
     $md5pass=md5($pass);
      rewind($fh);
      while(!feof($fh)) 
      {
         $line = fgets($fh, 4096);
         $user_pass = explode(":", $line);
         if(trim($user_pass[0]) == $user && trim($user_pass[1])==$md5pass) 
             header("Location: http://127.0.0.1/service.php"); 
      } 
      echo "<h2><font color='red'>Please try again </font></h2>" ;
      include "login.htm";
}
fclose($fh);
?>
