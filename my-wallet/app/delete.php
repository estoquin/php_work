<?php  
    session_start();
    $user = $_SESSION['user'];
    include('../app/db_connect.php');
    /* Para arriba vamos bien*/

    
    $query_user = "DELETE FROM `users` WHERE `users`.`user` = '$user'";
    $query_table = "DROP TABLE $user";
    mysqli_query($con, $query_user);
    mysqli_query($con, $query_table);
    session_destroy();
    header('location: ../index.php');