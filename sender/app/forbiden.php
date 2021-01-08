<?php
    $reason = $_GET['reason'];
    if($reason == "credentials")
    {
        $txt = "Nuh ah ah, you didn't say the magic word...";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="asssets/img/icon.png">
    <title>Sender</title>
</head>
<body>


<img src="../assets/img/fondo.jpg" alt="fondo">

<div class="container">
    <div class="form">
        <p><?php echo $txt; ?></p>
        <p>Goodbye...</p>
    </div>
</div>
<script>
    setTimeout(() => {
        window.location.replace("http://www.google.com");
    }, 3000);
</script>

<script src="assets/js/main.js"></script>
</body> 
</html>