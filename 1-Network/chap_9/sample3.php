<?php
$protocol = 'tcp';
$get_prot = getprotobyname($protocol);
if ($get_prot == -1) {
    // if nothing found, returns -1
    echo 'Invalid Protocol';
} else {
    echo 'Protocol #' . $get_prot;
}
?>
