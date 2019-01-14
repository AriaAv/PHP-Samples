<?php
$arr = array(1 =>3,2,0,9,4,6);
for (reset($arr);$k=key($arr);next($arr)) 
{
     $val = current($arr);
     echo ("Element $k equals $val<BR>\n");
}
?>
