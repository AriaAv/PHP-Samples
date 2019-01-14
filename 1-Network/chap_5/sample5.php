<?php
// Example loading an extension based on OS
if (!extension_loaded('sqlite')) {
    if (strtoupper(substr(PHP_OS, 0, 3) == 'WIN')) {
        dl('php_sqlite.dll');
    } else {
        dl('sqlite.so');
    }
}

// Or, the PHP_SHLIB_SUFFIX constant is available as of PHP 4.3.0
if (!extension_loaded('sqlite')) {
    $prefix = (PHP_SHLIB_SUFFIX == 'dll') ? 'php_' : '';
    dl($prefix . 'sqlite.' . PHP_SHLIB_SUFFIX);
}
?>
