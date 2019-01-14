<?php
function msg($name,$age) 
{
  if($name=="")
  {  
     echo "error.";     
     return;
  } 
  echo "My name is $name and i'm $age year's old";
}

msg("",21);
?>
