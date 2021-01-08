<!-- <script>
    //Password just for me...
    var user = prompt("User: ","Usuario");
    var pass = prompt("Pass: ", "Password");
    if(user != "estoquin" || pass!="3155")
    {
        window.location.replace("app/forbiden.php?reason=credentials");
    }
</script> -->

<?php
    include('app/db.php');
    if($con){

        while($row = mysqli_fetch_assoc($sql))
        { 
            $name[] = $row['name'];
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/mail.jpg">
    <title>Sender</title>
</head>
<body>

<img src="assets/img/fondo.jpg" alt="fondo">

<div class="container">
    <form action="app/add.php" class="form" method="POST">
        <div class="row">
            <div class="col">
                <h2>New target</h2>
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input class="form-control" type="text" placeholder="Nombre de la empresa" name="name"><br>
                    <label for="">Home Page</label>
                    <input class="form-control" type="text" placeholder="Pagina de la empresa" name="web"><br>
                    <label for="">Email</label>
                    <input class="form-control" type="text" placeholder="E-mail para contactarse" name="email"><br>
                    <label for="">About</label>
                    <input class="form-control" type="text" placeholder="Something to know?" name="about"><br>
                    <div class="row">
                        <div class="col-4">
                            <div class="row bsection">
                                <div class="col-sm">
                                    <input type="submit" class="btn btn-danger" id="addTarget">
                                </div>
                                <div class="col-sm">
                                    <div class="btn btn-success" onclick="send()">Mail</div>
                                </div>
                                <div class="col-sm">
                                    <a href="app/list.php" class="btn btn-success">List</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row index-info">
                            <p>Database: </p><p id= "status"><?php echo $dbstatus ?></p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row index-info">
                                <p>Last mail: </p><p>10-10-2020</p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row index-info">
                                <p>Total records: </p><p><?php echo count($name); ?></p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="row index-info">
                                <p class="response">Made by NE</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>    
</div>

<div><p class="cp">Copyright 2021, Nicolas Estoquin, All rights reserved.</p></div>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/main.js"></script>
</body> 
</html>

<?php } ?>