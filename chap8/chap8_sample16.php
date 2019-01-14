<?php
function vol($r) 
{
       function cube($num) 
       {
             return $num * $num * $num;
       }
       return 3.14159 * cube($r);
}
$radius = 2;
echo vol($radius); 
echo "<br>".(cube(4));
?>
