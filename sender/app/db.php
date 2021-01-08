<?php
    //DATABASE CONNECTION
    $con = mysqli_connect(
        'localhost',
        'root',
        '',
        'php_work'
    );

    if($con)
    {
        $dbstatus = "connect!";
    }
    else
    {
        $dbstatus = "missed!";
    }

    //LIST
    $query = "SELECT * FROM list";
    $sql = mysqli_query($con, $query);

    $name = array();
    $web = array();
    $email = array();
    $about = array();
    
?>