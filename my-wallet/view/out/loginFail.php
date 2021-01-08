<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="icon" href="../../resources/logo.png">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>My Wallet</title>
</head>
<body>
    
    <div class="container" id="app-title"><h1>My Wallet</h1></div>

    <div class="container">
        <div class="box" id="login">
            <h1>Welcome</h1>
            <p>Login failed, user or password not found</p>
            <form  id="login-form" action="../../app/login.php" method="post">
                <div class="form-element">
                    <label for="">User</label>
                    <input type="text" name="user-log" required>
                    <br>
                </div>
                <div class="form-element">
                    <label for="">Pass</label>
                    <input type="password" name="pass-log" required>
                    <br>
                </div>
                <button class="btn btn-primary btnn" type="submit">Log in</button>
            </form>
            <a href="register.php" class="btn btn-success btnn">Register</a>
        </div>
    </div>
</body>
</html>