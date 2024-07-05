<?php
// The data to be encrypted
$data = 'Hello Bangladesh.';

// The encryption key and initialization vector (IV)
$key = 'secret';
$iv = random_bytes(16);
$iv2 = random_bytes(16);
echo $iv.PHP_EOL;
echo $iv2.PHP_EOL;
// Encrypt the data using AES-256-CBC
$encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
echo $encrypted.PHP_EOL;
// Decrypt the data using AES-256-CBC
$decrypted = openssl_decrypt($encrypted, 'aes-256-cbc', $key, 0, $iv2);
echo "Result: \t";
// Output the decrypted data
echo $decrypted; // Output: This is a secret message