<?php
    include('app/conection.php');
    if($conectionStatus){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/ico.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!--Should i use this on the head or above the footer?-->
    <script src="https://kit.fontawesome.com/69a9be065e.js" crossorigin="anonymous"></script>
    <title>Argentina</title>
</head>
<body>


    <div class="menu-left">
        <div class="container">
            <h1 id="prov-title">Provincia</h1>
            <p id="prov-info">Seleccione una provincia para conocer un poco de ella...</p>
            <h4>Datos provinciales</h4>
            <table class="table" id="tabla">
            </table>    
        </div>
    </div>

    <div class="map" id="map">
        <div class="container">
            <div class="main-image">  
                <?php include('app/argentina.php') ?>
            </div>
        </div>
    </div>

    <div class="menu-rigth">
        <div class="container">
            <h1>Argentina</h1>
            <h6>Un poco sobre mi</h6>
            <p>Argentina es un país muy diverso que fomenta la cultura en sus diferentes ámbitos. En tiempos de su independencia se conocía a este país como “la París de América” por su diversidad cultural y estilo. Existen importantes museos de arqueología, historia y arte, y se fomenta la música autóctona como el folclore o el tango.</p>
            <p>El deporte predilecto es el fútbol y en menor escala el básquet o el ciclismo, aunque su deporte nacional es el pato.</p>
            <p>Las reuniones entre familiares y amigos son también una característica de los argentinos, que suelen juntarse a compartir comidas, especialmente el asado (gracias a la excelente calidad de sus carnes).</p>
            <p class="cp">Copyright 2021, Nicolas Estoquin, All rights reserved.</p>
        </div>
    </div>

    
    <!--Scripts-->
    <script src="main.js"></script>
    <!--Bootstrap Scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
    else{
        echo "error, database not conected!";
    }
?>