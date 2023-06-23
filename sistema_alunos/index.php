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
                <form action="login.php" method="POST">
                    <div class="div-main-inputs">
                        <div class="input-field">
                            <label for="usuario">Login:</label>
                            <input type="text" name="usuario" id="usuario" placeholder="Seu usuário..." required>
                        </div>
                        <div class="input-field">
                            <label for="user">Senha:</label>
                            <input type="password" name="senha" id="senha" placeholder="Sua senha..." required>
                        </div>
                        <div class="div-btn">
                    <input class="botao" type="submit" value="Entrar">
                </div>
                    </div>
                </form>
             
              
                <div class="div-nao-tem">
                    <p><a href="cadastro.html">AINDA NÃO TEM UMA CONTA?</a></p>
                </div>
            </div>
        </div>   
    </main>

    
    
</body>

</html>