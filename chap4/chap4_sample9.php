<?php
$info = array('coffee', 'brown', 'caffeine');
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

list($drink, , $power) = $info;
echo "$drink has $power.\n";

list( , , $power) = $info;
echo "I need $power!\n";
?> 
