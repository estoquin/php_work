<?php
    $con = mysqli_connect(
        'localhost',
        'root',
        '',
        'php_work'
    );

    if(!$con){
        $status = "Not connected";
    }
    else{
        $status = "connected";
    }