<?php

$db = [
    [
        "email" => "shuvo@asl.aero",
        "password" => '$2y$10$XTx4BawcwjjH/A4h48Uhg.N7v1Ea0tme65UihFXnhSdQARAf.0x6q' //Mehedi@1996
    ]
]; 



while(true){
    echo "1. Login\n";
    echo "2. Registration\n";
    echo "3. Exit\n";
    $choice = (int) readline("Enter the choice: ");
    switch($choice){
        case 1:
            echo "Login\n";
            login($db);
            break;
        case 2:
            echo "Registration\n";
            registration($db);
            break;
        case 3:
            exit("You are successfully exited.");
            break;
        default:
            echo "You input is invalid.";
    }
}

function login($users){

    $email = readline("Enter your email: ");
    $password = readline("Enter your password: ");
    $found = false;
    foreach($users as $user){
        if($user['email'] == $email){
            if(password_verify($password,$user['password'])){
                echo "\n Login Successfull\n";
            }else{
                echo "\n Incorrect Passwrod\n";
            }
            $found = true;
            break;
        }
    }
    if(!$found){
        echo "\n User Not Found.";
    }    

}
function registration(&$users){
    $email = readline("Enter your email: ");
    $password = readline("Enter your password: ");
    
    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

    $user = [
        "email" => $email,
        "password" => $hashedPassword
    ];

    $users[] = $user;
    echo "\n Registration Done\n";

    print_r($users);

}


