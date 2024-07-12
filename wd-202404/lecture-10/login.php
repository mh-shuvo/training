<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <title>Login</title>
</head>
<body>
    
    <div class="container">
        <h1 class="title">Login</h1>
        <p class="sub-title">Login with your credentials and enjoy the system.</p>

        <div class="login-form">
            <form action="process.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-field" name="username" id="username">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-field" name="password" id="password">
                </div>

                <div class="form-group">
                    <input type="checkbox" name="remember_me" id="remember_me"> Remember me
                </div>

                <div class="button-group">
                    <button type="submit" class="submit_button">Login</button>
                    <button type="reset" class="clear_button">Clear</button>
                </div>
            </form>

        </div>
    </div>


</body>
</html>