<?php
function add_some_extra(&$string)
{
    $string .= 'and something extra.';
}
//*****************************
$str = 'This is a string, ';

printf("<pre> \n %s",$str);
add_some_extra($str);
printf("\n %s",$str);

?>
