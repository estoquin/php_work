<?php
    include('db.php');


    //SEND MAIL
    $query = "SELECT * FROM list";
    $sql = mysqli_query($con, $query);
    
    $mailSubjet  = "Prueba-SENDER";
    $headers     = "MIME-Version: 1.0" . "\r\n";
    $headers    .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $messaje     = "ESTE ES UN MAIL QUE ENVIA NICOLAS A TODO EL MUNDO! MUAJAJAJAJA";

    while( $row = mysqli_fetch_assoc($sql) )
    {
        $email = $row['email'];
        mail($email, $mailSubjet, $messaje, $headers);
    }

    echo "finished!";
?>