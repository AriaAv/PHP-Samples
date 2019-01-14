<?php	
function takes_array($input)
{
   echo "function output:\n";
   for($i=0;$i<count($input);$i++)
     $input[$i]*=2;

   for($i=0;$i<count($input);$i++)
     echo $input[$i]."\n";
}
//*********************************

echo "<pre>";
$in=array(10,20,30,40);
takes_array($in);
echo "\nmain script output:\n";
for($i=0;$i<count($in);$i++)
   echo $in[$i]."\t";
?>
