<?php
if(isset($_GET["user"]))
{
   $user=$_GET["user"];
   setcookie(user,$user,time()+3600);
   echo "<h1>Page 2:</h1>Hello :";
   echo "$user</h1>";
?>
<p><a href="page3.php">Go To page3</a></p>
<?
}
else
  echo "Please start from page1.php";
?>
