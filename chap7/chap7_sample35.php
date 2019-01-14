<?php
if (CRYPT_STD_DES == 1) {
    echo 'Standard DES: ' . crypt('rasmuslerdorf', 'rl') . "\n";
}
if (CRYPT_EXT_DES == 1) {
    echo 'Extended DES: ' . crypt('rasmuslerdorf', '_J9..rasm') . "\n";
}
if (CRYPT_MD5 == 1) {
    echo 'MD5:          ' . crypt('rasmuslerdorf', '$1$rasmusle$') . "\n";
}
if (CRYPT_BLOWFISH == 1) {
echo 'Blowfish:     ' . crypt('rasmuslerdorf', '$2a$07$rasmuslerd...........$') . "\n";
}
?> 
