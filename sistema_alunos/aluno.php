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
    <title>Página de Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='CSS/aluno.css'>
</head>

<body>
<div class="cabecalho_topo">

        
           <div class="div-main-inputs">
                       <h3>Bem vindo, <?php
           print $_SESSION["usuario"];
           ?> <br/>
           <h3>Perfil <?php
           print $_SESSION["perfil"];
           ?> 
           </h3>
           <p> <?php
           print '<a href="logout.php">SAIR</a>';
           ?>
                  
              
                
 

    <script src='JS/login.js'></script>
    
</body>

</html>