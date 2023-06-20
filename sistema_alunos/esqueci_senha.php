
<?php  

  // processar o pedido
  include('conexao.php');
  if(empty($_POST) or (empty($_POST["usuario"])  or (empty($_POST["senha"])))){
    $email = $mysqli->escape_string($_POST['email']);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $erro[] = "E-mail inválido";
    }
    if(count($erro) ==0){
    $novasenha = substr(md5(time()),0,6);
    $nscriptografada = md5(md5($novasenha));
   
    if(mail($email, "Sua nova senha", "Sua nova senha:".$novasenha)){
    $sql_code = "UPDATE usuario SET senha = '$nscriptografada' WHERE email ='$email'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    }
  }
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
    <link rel='stylesheet' type='text/css' media='screen' href='CSS/login.css'>
</head>

<body>
    <main>
        <div class="container">
            <div class="div-img">
                <img src="Imagens/User.png" width="120px" height="120px">
            </div>

            <div class="div-form">
                <form  method="POST">
                    <div class="div-main-inputs">
                        <div class="input-field">
                            <label for="email">E-mail:</label>
                            <input type="text" name="email" id="email" />
                        </div>
                        
                    </div>                
            
                <div class="div-btn">
                    <input class="botao" type="submit" value="Recuperar">
                </div>
               
            </div>
            </form>
        </div>   
    </main>

    <script src='JS/login.js'></script>
    
</body>

</html>