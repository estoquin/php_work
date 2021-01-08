<?php

    include('db_connect.php');
    include('mailText.php');

    $email = $_POST['reg-email'];
    $user = $_POST['reg-user'];
    $pass = hash("fnv1a32",$_POST['reg-pass']);
    //To see why i use this hashing algorithm, just trie diferents on https://crackstation.net/
    //This was one of the algorithms thah the site couldn't crack, and it's just for fun

    //Send Mail
    $messaje = $msjb.$user.$msja;
    mail($email, $mailSubjet, $messaje, $headers);


    /*Query to the database*/
    $add_user = "INSERT INTO `users` (`id`, `user`, `email`, `pass`) VALUES (NULL, '$user', '$email', '$pass')";
    $create_user_table = "CREATE TABLE `php_work`.`$user` 
                        ( 
                            `id` INT NOT NULL AUTO_INCREMENT , 
                            `name` VARCHAR(100) NOT NULL , 
                            `mount` INT NOT NULL , 
                            `type` VARCHAR(100) NOT NULL , 
                            `destorg` VARCHAR(100) NOT NULL , 
                            `date` DATE NOT NULL , 
                            PRIMARY KEY (`id`)
                        ) 
                        ENGINE = InnoDB;";

    $query_add = mysqli_query($con, $add_user);
    $query_create = mysqli_query($con, $create_user_table);

    header('location: ../view/out/registerDone.php');
?>