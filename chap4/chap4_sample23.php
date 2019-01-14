<?php
function println ($s) 
{
     echo "$s<BR>\n";
}
$name = array ("ali", "hamid", "reza", "ahmad");
array_walk ($name, println);
?>
