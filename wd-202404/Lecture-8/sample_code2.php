<?php 
$password = "Something";
// $hashedPassword = md5($password);
// $hashedPassword = password_hash($password,PASSWORD_BCRYPT);
$hashedPassword = openssl_encrypt($password,'aes-256-cbc',"test",0,random_bytes(5));
$hashedPassword2 = openssl_encrypt($password,'aes-256-cbc',"test",0,random_bytes(5));
echo $hashedPassword."\n",$hashedPassword2;
$iv1 = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-128-cbc'));
echo "\n",$iv1."\n";

$methods = openssl_get_cipher_methods();
// print_r($methods);