<?php  

    $con = mysqli_connect(
        'localhost',
        'root',
        '',
        'php_work'
    );

    if($con){
        $conectionStatus = true;
    }
    else{
        $conectionStatus = false;
    }