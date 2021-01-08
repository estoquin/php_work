<?php
    include('db.php');
    if($con){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/img/mail.jpg">
    <title>Sender</title>
</head>
<body>
    <img src="../assets/img/fondo.jpg" alt="fondo">

    <div class="container">
        <div class="form list-section"><!--Just has this clase name for use same style atributes...-->
            <div class="row">
                <div class="col">
                    <h2>Enterprises</h2>
                    <!-- Todavia le falta el overflow:scroll -->
                    <table class="table table-light table-striped table-sm table-bordered table-responsive">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Site</th>
                                <th>Mail</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_assoc($sql)){ $name[] = $row['name'];?>
                                <tr>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><a href="<?php echo $row['web'] ?>" target="blank"><?php echo $row['web']; ?></a></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['about']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="row bsection">
                        <div class="col-sm">
                            <button class="btn btn-success" onclick="send()">Mail</button>
                        </div>
                        <div class="col-sm">
                            <a href="../index.php" class="btn btn-danger">Add</a>
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

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>
<?php } ?>