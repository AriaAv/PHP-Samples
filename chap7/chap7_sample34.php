<?php
$password = crypt('mypassword'); 
if (crypt($user_input, $password) == $password) 
{
   echo "Password verified!";
}
?> 
