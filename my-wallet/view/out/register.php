<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../resources/logo.png">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>My Wallet</title>
</head>
<body>
    
    <div class="container" id="app-title"><h1>My Wallet</h1></div>

    <div class="container">
        <div class="box" id="login">
            <h1>Welcome</h1>
            <form  id="login-form" action="../../app/register.php" method="post">
                <div class="form-element">
                    <label for="">Email</label>
                    <input type="text" name="reg-email" required>
                    <br>
                </div>
                <div class="form-element">
                    <label for="">User</label>
                    <input type="text" name="reg-user" required>
                    <br>
                </div>
                <div class="form-element">
                    <label for="reg-pass">Pass</label>
                    <input type="password" name="reg-pass" required onkeyup="pass()" id="password1">
                    <br>
                </div>
                <div class="form-element">
                    <label for="reg-pass-check">Repeat Pass</label>
                    <input type="password" name="reg-pass-check" required onkeyup="pass()" id="password2">
                    <br>
                </div>
                <div id="passcheck"></div>
                <button type="submit" class="btn btn-success btnn" onclick="pass()">Register</button>
            </form>
            <a href="../../index.php" class="btn btn-primary btnn">Log in</a>
        </div>
    </div>
    <script src="../../assets/js/main.js"></script>
</body>
</html>