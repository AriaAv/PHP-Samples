<?php
function sigint_handler($signal) {
     print "Interrupt!\n";
     exit;
}
pcntl_signal(SIGINT, "sigint_handler");
declare (ticks = 1) {
while (sleep(1));
}
?>
