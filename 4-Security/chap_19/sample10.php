<?php
//    database connection
 $query = "SELECT password FROM login";
 if(strlen(trim($_GET['username'])))
   $query = $query." where username='".$_GET['username']."'"; 
 else
   header("Location: http://127.0.0.1/"); 
   
 $connectionstring = odbc_connect("site_users", "", ""); 
 if(!$connectionstring)
    die("connection failed");
 $result = odbc_do($connectionstring, $query); 
 $pass=odbc_result ($result,1);
 odbc_close($connectionstring); 

// ***********************  user authentication
 if(!isset($_COOKIE["PHPSESSID"]))
    header("Location: http://127.0.0.1/"); 


 $v2=md5($pass.$_COOKIE["PHPSESSID"]);
 $v1=$_GET["password"];
 echo $v1."<br>";
 echo $v2;
 if ($v1==$v2)
 {
    session_start();
    $_SESSION['my_pass']=$v2;   
    $_SESSION['user_pass']=$v1;   
    header("Location: http://127.0.0.1/aa.php?username=".$_GET['username']);
 }  
 else
   header("Location: http://127.0.0.1/"); 
?>
<br><a href="aa.php">Link to Other Page</a>
