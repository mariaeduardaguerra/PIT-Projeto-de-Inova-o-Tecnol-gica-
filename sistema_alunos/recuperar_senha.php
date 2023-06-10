<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Página de Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='CSS/login.css'>
</head>

<body>
<?php  
   if( empty($_GET['utilizador']) || empty($_GET['confirmacao']) )
   die('<p>Não é possível alterar a password: dados em falta</p>');

 
   include('conexao.php');

 $user = mysql_real_escape_string($_GET['utilizador']);
 $hash = mysql_real_escape_string($_GET['confirmacao']);

 $q = mysql_query("SELECT COUNT(*) FROM recuperacao WHERE utilizador = '$user' AND confirmacao = '$hash'");

 if( mysql_result($q, 0, 0) == "1" ){
   // os dados estão corretos: eliminar o pedido e permitir alterar a password
   mysql_query("DELETE FROM recuperacao WHERE utilizador = '$user' AND confirmacao = '$hash'");

   echo 'Sucesso! (Mostrar formulário de alteração de password aqui)';   

 } else {
   echo '<p>Não é possível alterar a password: dados incorretos</p>';

 }

  
 ?>
    <script src='JS/login.js'></script>
    
</body>

</html>