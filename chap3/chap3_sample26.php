<?php
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
echo "<pre>";
foreach ($arr as $key =>$value) 
{
     if($value=='stop')
         break; 
     echo  "   $value \n";
}
?>
