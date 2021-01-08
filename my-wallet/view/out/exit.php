<?php
    session_start();
    session_destroy();
?>

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


    <a href="my-wallet.php" class="main-links">
        <div class="container" id="app-title"><h1>My Wallet</h1></div>
    </a>


    <div class="container">
        <div class="box" id="exit">
            <h3>Thanks!</h3>
            <a class="btn btn-secondary btnn" href="../../index.php">Log in</a>
            <a class="btn btn-success btnn" href="register.php">Register</a>
        </div>
    </div>


</body>
</html>