<?php
    //DB Hosted at Infinity Free https://infinityfree.net/
    // Also on https://remotemysql.com/databases.php
    // And https://www.freemysqlhosting.net/account/?msg=943
    include('stadistics/app/conection.php');
    if($conectionStatus){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>PHP WORK</title>
</head>

<body class="bg-dark">
    <h1 class="display-6 title text-center my-4">Others using PHP</h1>

    <div class="links">
        <div class="row justify-content-center">
                <div class="app mx-5 my-1 p-3 rounded text-center shadow">
                    <a href="my-wallet/index.php" target="_blank" ><img src="my-wallet/resources/logo.png"></a>
                     <p class="p-2">MY WALLET</p>
                 </div>
                 <div class="app mx-5 my-1 p-3 rounded text-center shadow">
                     <a href="sender/index.php" target="_blank" ><img src="sender/assets/img/mail.jpg"></a>
                     <p class="p-2">SENDER</p>
                 </div>
                 <div class="app mx-5 my-1 p-3 rounded text-center shadow">
                     <a href="stadistics/index.php" target="_blank" ><img src="stadistics/resources/ico.png" srcset=""></a>
                     <p class="p-2">STADISTICS</p>
                 </div>        
        </div>
    </div>

    <div class="p-5 m-3 rounded shadow explanation">
        <ul>
            <li><p>These are little projects i used to put on practice some technologies and techniques while i was learning (like AJAX without Jquery, bootstrap, jquery animation or CRUD to the database, but really poor), some of them are responsive, but they are mainly made just for fun.</p></li>
            <li><p>'My wallet' and 'Sender' are kind of responsive, 'Stadistics' is not responsive at all...</p></li>
            <li><p>'My wallet' is one of the first so, it has no AJAX, that's why you are going to find many files in it.</p></li>
            <li><p>For simplicity to upload the site, the three are connected to the same database (it is all messed up) But they had their own DB at the beginning.</p></li>
            <li><p>Source code:  <a href="https://github.com/estoquin/php_work.git">https://github.com/estoquin/php_work.git</a></p></li>
            <li><p style="color:red;">'Sender' is not gonna work because of the server where it is hosted, i am having troubles setting up the mailer...</p></li>
        </ul>
        <p class="text-right cp">Copyright 2021, Nicolas Estoquin, All rights reserved.</p>
    </div>
</body>
</html>
<?php
    }
    else{
        echo "error, database not conected!";
    }
?>