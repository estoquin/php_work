<?php
    session_start();
    if($_SESSION['status'] == false){
        header('Location: forbiden.php');
    }
    include('../../app/db_connect.php');

    $user = $_SESSION['user'];
    $query = "SELECT date, name, mount, destorg FROM $user WHERE type='income'";
    $sql = mysqli_query($con, $query);

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
<body>
    
    <h2 class="pagetitle">Incomes</h2>    
    <div class="container">
        <div class="box" id="io">
            <div class="row" id="add-io">
                <form action="../../app/add.php" method="POST">
                    <div class="main-form">
                        <div class="form-element">
                            <label>date</label>
                            <input type="date" name="date" required>    
                        </div>
                        <div class="form-element">
                            <label>name</label>
                            <input type="text" name="name" required>    
                        </div>
                        <div class="form-element">
                            <label>mount</label>
                            <input type="number" name="mount" required>    
                        </div>
                        <div class="form-element">
                            <label >from</label>
                            <input type="text" name="from-to" required>    
                        </div>    
                            <input type="hidden" name="type" value="income">
                    </div>
                    <br>
                    <button  class="btn btn-warning btnn" type="submit">Add</button>
                </form>    
            </div>

            <div class="container" id="io-table">
                <div class="row" id="io-table-title">
                    <div class="col">date</div>
                    <div class="col">name</div>
                    <div class="col">mount</div>
                    <div class="col">from</div>
                </div>
                <hr>
                <?php 
                    while($row= mysqli_fetch_assoc($sql)){
                ?>
                    <div class="row" id="io-table-row">
                        <div class="col"><?php echo $row['date']; ?></div>
                        <div class="col"><?php echo $row['name']; ?></div>
                        <div class="col">$<?php echo $row['mount']; ?></div>
                        <div class="col"><?php echo $row['destorg']; ?></div>
                    </div>
                <?php
                    }
                ?>
            </div>
            <a class="main-links" href="main.php"><button class="btn btn-primary btnn">Main</button></a>
        </div>    
    </div>
    

</body>
</html>