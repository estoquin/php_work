<?php
    session_start();
    if($_SESSION['status'] == false){
        header('Location: forbiden.php');
    }
    //Invocamos la conexion
    include('../../app/db_connect.php'); 
    
    //Preparamos la consulta
    $user = $_SESSION['user'];
    $query = "SELECT * FROM `$user`;";

    //Envia la consulta
    $sql = mysqli_query($con,$query);

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
    <h2 class="pagetitle">History</h2>
    <div class="container">
        <div class="box" id="history">
            <div class="container" id="history-table">
                <div class="row" id="history-table-title">
                    <div class="col">date</div>
                    <div class="col">name</div>
                    <div class="col">type</div>
                    <div class="col">mount</div>
                    <div class="col">from/to</div>
                </div>
                <hr>
                <?php
                        //Averiguar bien que hace esta funcion y como opera
                    while( $row = mysqli_fetch_assoc($sql) )
                    {
                ?>
                        <div class="row" id="history-table-row">
                            <div class="col"><?php echo $row['date'] ?></div>
                            <div class="col"><?php echo $row['name'] ?></div>
                            <div class="col"><?php echo $row['type'] ?></div>
                            <?php
                                //Ver = vs == vs ===
                                if($row['type']=='income'){
                                    $color='green';
                                }
                                elseif($row['type']=='outcome'){
                                    $color='red';
                                }
                            ?>
                            <div class="col" style="color:<?php echo $color; ?>;">$<?php echo $row['mount'] ?></div>
                            <div class="col"><?php echo $row['destorg'] ?></div>
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