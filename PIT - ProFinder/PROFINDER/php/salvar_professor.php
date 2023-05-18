<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>salvar professor</title>
</head>

<body>

    <?php

        require_once("professor.php");

        // validar e sanitizar os dados recebidos do formulário
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
        $senha = isset($_POST["senha"]) ? $_POST["senha"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";

        // criar objeto Professor
        $professor = new Professor($nome, $senha, $email);

        // salvar professor
        $mensagem = $professor->salvar();

        // exibir mensagem de sucesso
        echo $mensagem;
        
    ?>

</body>

</html>
