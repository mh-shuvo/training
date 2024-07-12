<?php
session_start();

$db = [
    [
        "username" => "shuvo@asl.aero",
        "name"     => "Shuvo",
        "password" => "12345"
    ],
    [
        "username" => "hasan@asl.aero",
        "name"     => "Hasan",
        "password" => "123456"
    ]
];

$from_data = $_POST;

$errors = [];

if(!array_key_exists('username',$from_data) || $from_data['username'] == null){
    $errors[] = "Username field is required";
}

if(!array_key_exists('password',$from_data) || $from_data['password'] == null){
    $errors[] = "Password field is required";
}


if(!empty($errors)){
    echo "<pre>";
    print_r($errors);
    echo "<a href='./'>Back</a>";
}
checkLoginCredentials($from_data,$db);


function checkLoginCredentials($data,$db){
    $found = false;
    foreach($db as $user){
        if($user['username'] == $data['username']){
            if($data['password'] == $user['password']){
                $_SESSION['LOGIN_USER'] = $user;
                header("Location:./");
            }else{
                echo "Incorrect Passwrod\n";
            }
            $found = true;
            break;
        }
    }
    if(!$found){
        echo " User Not Found.";
    }
}
