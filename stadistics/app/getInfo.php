<?php
    include('conection.php');

    $prov = $_GET["prov"];

    $query = "SELECT * from provincias WHERE nombre='$prov'";

    $sql = mysqli_query($con, $query);

    $provincia = mysqli_fetch_assoc($sql);
    

    echo utf8_encode($provincia['info']);//This works like the replace of the return in a c++ function