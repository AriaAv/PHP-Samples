<?php
function power($base, $exp) 
{ 
   if ($exp) { 
      return $base*power($base,$exp-1); 
   }  
   return 1; 
}
echo power(10,4);

?>
