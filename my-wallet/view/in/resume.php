<?php
    
    include('../../app/resume.php');
    if($_SESSION['status'] == false){
        header('Location: forbiden.php');
    }
    
    include('../../app/db_connect.php');
    
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
    <h2 class="pagetitle">Resume</h2>    
    <div class="container">
        <div class="box" id="resume">
            <div class="row" id="resume-items">
                <div class="col-lg-3 col-sm-12" id="resume-block">
                    <div class="col" id="resume-year">
                        <h5>year</h5>
                        <hr>
                        <div id="balance-table">
                            <div>
                                <div><span class="span-title">earned: </span>$ <?php echo $total_year_income ?></div>
                                <div><span class="span-title">spended: </span>$ <?php echo $total_year_outcome ?></div>
                                <hr>
                                <div><span class="span-title">balance: </span>$ <?php echo $year_balance ?></div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12" id="resume-block">
                    <div id="resume-month">
                        <h5>month</h5>
                        <hr>
                        <div id="balance-table">
                            <div>
                                <div><span class="span-title">earned: </span>$ <?php echo $total_month_income ?></div>
                                <div><span class="span-title">spended: </span>$ <?php echo $total_month_outcome ?></div>
                                <hr>
                                <div><span class="span-title">balance: </span>$ <?php echo $month_balance ?></div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12" id="resume-block">
                    <div id="resume-day">
                        <h5>day</h5>
                        <hr>
                        <div id="balance-table">
                            <div>
                                <div><span class="span-title">earned: </span>$ <?php echo $total_day_income ?></div>
                                <div><span class="span-title">spended: </span>$ <?php echo $total_day_outcome ?></div>
                                <hr>
                                <div><span class="span-title">balance: </span>$ <?php echo $day_balance ?></div>
                            </div> 
                        </div>
                    </div>
                </div> 
            </div>


            <div class="row" id="resume-balance">
                <div>
                    <h6>actual balance</h6>
                    <h2 id="actual-balance-mount" style='color: <?php echo $color_output ?>'>$ <?php echo $total_balance ?></h2>
                </div>
            </div>

            <a class="main-links" href="main.php"><button class="btn btn-primary btnn">Main</button></a>
        </div>    
    </div>

</body>
</html>