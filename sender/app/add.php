<?php

    include('db.php');

    $name = $_POST['name'];
    $web = $_POST['web'];
    $email = $_POST['email'];
    $about = $_POST['about'];

    $sql = "INSERT INTO `list` (`id`, `name`, `web`, `email`, `about`) VALUES (NULL, '$name', '$web', '$email', '$about');";
    $query = mysqli_query($con,$sql);

    if($query)
    {
        $status = true;
    }
    else
    {
        $status = false;
    }

    echo $status;