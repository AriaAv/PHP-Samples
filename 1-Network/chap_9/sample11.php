<?php
/* Prepare the read array */
$read = array($socket1, $socket2);
$num_changed_sockets = socket_select($read, $write = NULL, $except = NULL, 0);

if ($num_changed_sockets === false) {
    /* Error handling */
} else if ($num_changed_sockets > 0) {
    /* At least at one of the sockets something interesting happened */
}
?>
