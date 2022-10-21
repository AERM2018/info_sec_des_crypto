<?php
    function encrypt($data, $secret) {
        $key = base64_encode($secret);
        $cipher = base64_encode(openssl_encrypt($data,'DES-EDE3',$key,OPENSSL_RAW_DATA));
        save_encrypted_file_and_key($cipher,$key,"files/");
    }

    function decrypt($data, $secret) {
        $key = base64_decode($secret);
        $data = base64_decode($data);
        $original = openssl_decrypt($data,'DES-EDE3',$key,OPENSSL_RAW_DATA);
        return $original;
    }

    function save_encrypted_file_and_key($data,$key,$path){
        $file = fopen($path."encrypted.txt",'w');
        fwrite($file,$data);
        fclose($file);

        $key_file = fopen($path."key.txt",'w');
        fwrite($key_file,$key);
        fclose($key_file);
    }
?>