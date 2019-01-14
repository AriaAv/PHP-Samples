<?php
$str = 'one|two|three|four';

print_r(explode('|', $str, 2));
print_r(explode('|', $str, -1));
?> 
