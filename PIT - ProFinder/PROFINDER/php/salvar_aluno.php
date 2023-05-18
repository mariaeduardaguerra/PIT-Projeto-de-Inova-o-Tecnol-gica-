<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>salvar aluno</title>
</head>

<body>

    <?php

        require_once("aluno.php");

        // validar e sanitizar os dados recebidos do formulário
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
        $senha = isset($_POST["senha"]) ? $_POST["senha"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";

        // criar objeto Professor
        $aluno = new Aluno($nome, $senha, $email);

        // salvar professor
        $mensagem = $aluno->salvar();

        // sxibir mensagem de sucesso
        echo $mensagem;
        
    ?>

</body>

</html>
