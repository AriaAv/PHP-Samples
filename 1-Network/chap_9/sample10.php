<?php
$sockets = array();
$uniqid = uniqid('');
if (file_exists("/tmp/$uniqid.sock")) {
    die('Temporary socket already exists.');
}
/* Setup socket pair */
if (!socket_create_pair(AF_UNIX, SOCK_STREAM, 0, $sockets)) {
    echo socket_strerror(socket_last_error());
}
/* Send and Recieve Data */
if (!socket_write($sockets[0], "ABCdef123\n", strlen("ABCdef123\n"))) {
    echo socket_strerror(socket_last_error());
}
if (!$data = socket_read($sockets[1], strlen("ABCdef123\n"), PHP_BINARY_READ)) {
    echo socket_strerror(socket_last_error());
}
var_dump($data);

/* Close sockets */
socket_close($sockets[0]);
socket_close($sockets[1]);
?>
