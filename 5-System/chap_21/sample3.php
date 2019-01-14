#! /usr/local/bin/php 
<?php
exec("rpm -q samba",$b);
if(!strstr($b[0],"is not installed"))
{
  exec("service smb status",$a);
  if(!strstr($a[0],"running"))
     system("service smb start");
  else
   echo "\nsmb is running ,i do nothing\n";
}
else
 echo "\nsmb is not installed\n";
//==================================
exec("rpm -q cups",$c);
if(!strstr($c[0],"is not installed"))
{
  exec("service cups status",$d);
  if(!strstr($d[0],"running"))
     system("service cups start");
  else
   echo "\ncups is running ,i do nothing";
}
else
 echo "\ncups is not installed\n";
echo "\n";
?>
