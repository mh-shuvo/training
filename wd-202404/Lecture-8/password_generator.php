<?php

echo "1. Login\n";
echo "2. Registration\n";
echo "3. Exit\n";

$db = [
    [
        "email" => "shuvo@asl.aero",
        "password" => '$2y$10$V/mp7V2r70mxKWxaku9ee.idqfgWeFjruxJ3UzA26w5vex7lYPSQy' //Mehedi@1996
    ]
]; 

while(true){
    $choice = (int) readline("Enter the choice: ");
    switch($choice){
        case 1:
            echo "Login\n";
            login($db);
            break;
        case 2:
            echo "Registration\n";
            registration();
            break;
        case 3:
            exit("You are successfully exited.");
            break;
        default:
            echo "You input is invalid.";
    }
}

function login(&$db){
    $email = readline("Enter your email: ");
    $password = readline("Enter your password: ");

    print_r($db);

    foreach($db as $user){
        if($user['email'] == $email){
            if(password_verify($user['password'],$password)){
                echo "\n Login Successfull";
            }else{
                echo "\n Incorrect Passwrod";
            }
        }
    }
    echo "\n User Not Found.";

}
function registration(){
    $email = readline("Enter your email: ");
    $password = readline("Enter your password: ");
    
    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

    $user = [
        "email" => $email,
        "password" => $hashedPassword
    ];

    $db[] = $user;
    echo "\n Registration Done";

}


