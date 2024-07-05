<?php
$input = "Hello";

//md5()
// $hashedValue = md5($input);
// echo md5($input);

// password_hash()

// $hashedValue = password_hash($input,PASSWORD_ARGON2I,[
//     "memory_cost" => 128,
//     "time_cost"   => 5,
//     "threads"     => 2
// ]);

// echo PASSWORD_ARGON2_DEFAULT_MEMORY_COST."\n";
// echo PASSWORD_ARGON2_DEFAULT_TIME_COST."\n";
// echo PASSWORD_ARGON2_DEFAULT_THREADS."\n";

// hash

// $algs = hash_algos();

// $hashedValue = hash("sha256",$input);


// openssl
$key = "SECRET";

$algs = openssl_get_cipher_methods();
// $length = openssl_cipher_iv_length('aes-128-cbc');
// $iv = openssl_random_pseudo_bytes($length);
$iv = random_bytes(16);
$hashedValue = openssl_encrypt($input,'aes-128-cbc',$key,0,$iv);


echo $hashedValue."\n";

$data = openssl_decrypt($hashedValue,'aes-128-cbc',$key,0,$iv);
echo $data;
