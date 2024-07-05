<?php
$password = "Mehedi@1996";
$storeIntoDB = password_hash($password,PASSWORD_DEFAULT);


$input = "Mehedi@1996";

echo $storeIntoDB.PHP_EOL;
echo password_hash($input,PASSWORD_DEFAULT).PHP_EOL;

$isMatch = password_verify($input,$storeIntoDB);

if($isMatch){
    echo "Your password is correct. Login successfull.";
}else{
    echo "Invalid Password;";
}

