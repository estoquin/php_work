<?php
    session_start();
    $user = $_SESSION['user'];

    include('../app/db_connect.php');

    $query = "TRUNCATE TABLE $user";
    $sql = mysqli_query($con, $query);

    header('Location: ../view/in/main.php');