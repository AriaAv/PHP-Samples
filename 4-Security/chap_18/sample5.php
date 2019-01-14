<?php
    $key = 'this is a very long key, even too long for the cipher';
    $plain_text = 'very important data';
   
    $td = mcrypt_module_open('des', '', 'ecb', '');
    $key = substr($key, 0, mcrypt_enc_get_key_size($td));
    $iv_size = mcrypt_enc_get_iv_size($td);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);

    if (mcrypt_generic_init($td, $key, $iv) != -1) 
  {
        $c_t = mcrypt_generic($td, $plain_text);
        mcrypt_generic_deinit($td);
        mcrypt_generic_init($td, $key, $iv);
        $p_t = mdecrypt_generic($td, $c_t);

        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
    }
    if (strncmp($p_t, $plain_text, strlen($plain_text)) == 0) {
        echo "ok\n";
    } else {
        echo "error\n";
    }
?>
