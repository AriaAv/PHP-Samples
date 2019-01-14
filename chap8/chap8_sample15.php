<?php
function counter() {
static $counter = 0;
++$counter;
echo "<br>$counter";
}

for($i=0;$i<5;$i++)
  counter();
?>
