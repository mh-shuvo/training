<?php

$today = date('d-M-Y');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Simple Application</title>
</head>
<body>
    <h1>Welcome to the PHP Web application.</h1>
    <h2><?php echo $today;?></h2>

    <form action="server.php" method="POST">
        <input type="email" name="user_email" id="" placeholder="Enter your email"> <br><br>
        <input type="password" name="password" placeholder="Enter your password">
        <button type="submit">Login</button>
    </form>


</body>
</html>