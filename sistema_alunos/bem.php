<?php 
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href=index.php';</script>";
    }
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Página de Boas Vindas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Poppins&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='CSS/boasvindas.css'>
</head>

<body>
        <div class="div-main">
           <h1>BEM-VINDO
           <?php
           print $_SESSION["usuario"];
           ?>
           <h1>
        </div>
</body>

</html>