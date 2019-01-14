<?php
    $sh = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    if (socket_bind($sh, '127.0.0.1', 4242)) {
        echo "Socket bound correctly";
    }
    $buf = 'Test Message';
    $len = strlen($buf);
    if (socket_sendto($sh, $buf, $len, 0x100, '192.168.0.2', 4242) !== false) {
        echo "Message sent correctly";
    }
    socket_close($sh);
?>
