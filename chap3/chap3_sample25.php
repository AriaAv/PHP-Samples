<?php
/* foreach example 1: value only */

$a = array(1, 2, 3, 17);

foreach ($a as $v) {
   echo "Current value of \$a: $v.\n";
}

/* foreach example 2: value (with key printed for illustration) */

$a = array(1, 2, 3, 17);

$i = 0; /* for illustrative purposes only */

foreach ($a as $v) {
    echo "\$a[$i] => $v.\n";
    $i++;
}

/* foreach example 3: key and value */

/* foreach example 4: multi-dimensional arrays */
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}

/* foreach example 5: dynamic arrays */

foreach (array(1, 2, 3, 4, 5) as $v) {
    echo "$v\n";
}
?> 