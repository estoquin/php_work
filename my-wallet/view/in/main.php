<?php
    session_start();
    if($_SESSION['status'] == false){
        header('Location: forbiden.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../resources/logo.png">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>My Wallet</title>
</head>
<body id="main-panel">
    <a href="my-wallet.php" class="main-links">
        <div class="container" id="app-title"><h2>My Wallet</h2></div>
    </a>
    <div class="container">
        <div class="box" id="main">
            <h1>Home</h1>
            <div class="row" id="menu-options">
                <div class="col-lg-3 col-md-6 col-sm-12"><a href="incomes.php" class="main-links"><div class="main-element">Incomes</div></a></div>
                <div class="col-lg-3 col-md-6 col-sm-12"><a href="outcomes.php" class="main-links"><div class="main-element">Outcomes</div></a></div>
                <div class="col-lg-3 col-md-6 col-sm-12"><a href="history.php" class="main-links"><div class="main-element">History</div></a></div>
                <div class="col-lg-3 col-md-6 col-sm-12"><a href="resume.php" class="main-links"><div class="main-element">Resume</div></a></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="../out/exit.php" class="btn btn-dark btnn" id="log-out-button">Logout</a>
                    <button onclick="reset()" class="btn btn-dark btnn"id="log-out-button">Reset</button>
                    <button onclick="erase()" class="btn btn-dark btnn"id="log-out-button">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/main.js"></script>
</body>
</html>