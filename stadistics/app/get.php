<?php
    include('conection.php');

    $prov = $_GET["prov"];

    $query = "SELECT * from provincias WHERE nombre='$prov'";

    $sql = mysqli_query($con, $query);

    $provincia = mysqli_fetch_assoc($sql);

    //This works like the replace of the return in a c++ function
    echo '  <tr>
                <td>Capital</td>
                <td>'.utf8_encode(ucwords($provincia['capital'])).'</td>
            </tr>
            <tr>
                <td>Superficie</td>
                <td>'.$provincia['superficie'].' km2</td>
            </tr>
            <tr>
                <td>Poblacion</td>
                <td>'.$provincia['poblacion'].' hab.</td>
            </tr>
            <tr>
                <td>Altitud</td>
                <td>'.$provincia['altitud'].' ms.n.m.</td>
            </tr>
            <tr>
                <td>Densidad</td>
                <td>'.$provincia['densidad'].' hab/km2</td>
            </tr>
            <tr>
                <td>IDH</td>
                <td>'.$provincia['idh'].'</td>
            </tr>
            <tr>
                <td>% de sup. Argentina</td>
                <td>'.$provincia['porsup'].' %</td>
            </tr>
            <tr>
                <td>% de hab. Argentina</td>
                <td>'.$provincia['porpob'].' %</td>
            </tr>';