<?php
$port = 9090;
if (!$socket = socket_create_listen($port)) {
    echo socket_strerror(socket_last_error());
}
if (!socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, 1)) {
    echo socket_strerror(socket_last_error());
}
if (!socket_set_nonblock($socket)) { // $socket is now nonblocking
    echo socket_strerror(socket_last_error());
}
if (!socket_set_block($socket)) {     // $socket is now blocking
    echo socket_strerror(socket_last_error());
}
?>
