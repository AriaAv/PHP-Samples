<?php
if(isset($_COOKIE["user"]))
{
  $user=$_COOKIE["user"];
  echo "<H1>Page 3:</h1><br> Hello $user </br>"; 
}
else
  echo " Can Not Find Cookie "; 
?>
