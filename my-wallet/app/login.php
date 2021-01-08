<?php
    session_start();
    include('db_connect.php');
    
    $user_log = $_POST['user-log'];
    $pass_log = hash("fnv1a32",$_POST['pass-log']);

    $query = "SELECT * FROM users";
    $sql = mysqli_query($con, $query);

    $valid_users = array();
    $valid_pass = array();

    //Create array with all valid users and pass
    while( $row = mysqli_fetch_assoc($sql)){
        $valid_users[] = $row['user'];
        $valid_password[] = $row['pass'];
    }

    $login = false;
    $invalid_password = true;

    //Here we compare the user input with the registered users
    for($i = 0; $i < count($valid_users); $i++){
        if($user_log == $valid_users[$i]){
            if($pass_log == $valid_password[$i]){
                $login = true;
                break;
            }
            else{
                $invalid_password = true;
                $login = false;
            }
        }
        else{
            $login = false;
            $invalid_password = false;
        }
    }

    //Funciona bien pero no redirecciona
    if($login == false){
        if($invalid_password){
            header('Location: ../view/out/loginFail.php');
        }
        else{
            header('Location: ../view/out/loginFail.php?');
        }
    }
    else{
        $_SESSION['user'] = $user_log;
        $_SESSION['status'] = true;
        header("Location: ../view/in/main.php");
    }
    
?>  