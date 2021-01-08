<?php
    session_start();
    $user = $_SESSION['user'];
    include('db_connect.php');

    $date = $_POST['date'];
    $name = $_POST['name'];
    $mount = $_POST['mount'];
    $from_to = $_POST['from-to'];
    $type = $_POST['type'];

    $query = "INSERT INTO `$user` (`id`, `name`, `mount`, `type`, `destorg`, `date`) VALUES (NULL, '$name', '$mount', '$type', '$from_to', '$date');";
    $query_result = mysqli_query($con, $query);

    if($type == 'income')
    {
        header('Location: ../view/in/incomes.php');
    }
    elseif($type == 'outcome')
    {
        header('Location: ../view/in/outcomes.php');
    } 