<?
$password_file = "C:\\sss.txt";
$adduser=$_POST['adduser'];
$addpass=$_POST['addpass'];
if(!$fh = fopen($password_file, "a+")) 
     die("<P>Could Not Open Password File"); 
if(trim($adduser)=="" || trim($addpass)=="")    
{
      echo "<br><h2><font color='red'>"." Please enter username and password</font></h2> ";
      echo "<hr width=50% align=left>";
      include "new.htm";
}    
else
{
      rewind($fh);
      while(!feof($fh)) 
      {
         $line = fgets($fh, 4096);
         $user_pass = explode(":", $line);
         if($user_pass[0] == $adduser) 
         {
            echo "<h2><font color='red'>Duplicate Username. Login Invalid!</font></h2>";
            echo "<hr width=50% align=left>";
            include "new.htm";
            return 0;
          }
      } 
      $add = $adduser . ":" . md5($addpass) . chr(13).chr(10);
      if(!fwrite($fh, $add)) { die("<P>Could Not Write To Password File"); }
      echo"<h2>User   ".$adduser."   Added!</h2>";     
      echo "<a href=\"login.htm\" >Login</a>";
}
fclose($fh);
?>
