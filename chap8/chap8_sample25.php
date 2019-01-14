<?php
function print_name($name)
{
    echo "my name is $name";
}
function print_family($family)
{
    echo "my name is $family";
}
//*************************

echo "<pre>";
$arr = get_defined_functions();
$func="print_name";
$num=count($arr["user"]);
for($i=0;$i<$num;$i++)
   if($arr["user"][$i]==$func)
         $func("ali");         
?>
