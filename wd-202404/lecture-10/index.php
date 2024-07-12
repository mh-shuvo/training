<?php
session_start();

function hasLogin():bool{
    if(array_key_exists('LOGIN_USER',$_SESSION) || $_SESSION['LOGIN_USER'] != NULL){
        return true;
    }
    return false;
}

if(!hasLogin()){
    header("Location:./login.php");
}
print_r($_SESSION);
$user =  $_SESSION['LOGIN_USER'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
    <div class="container">
        <h1 class="title">Welcome <?php echo $user['name'];?></h1>
        <form action="./logout.php" method="POST">
            <button type="submit">Logout</button>
        </form>
    </div>


</body>
</html>