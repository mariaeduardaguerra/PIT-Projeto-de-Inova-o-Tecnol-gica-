<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("aluno.php");

        $nome = $_POST["nome"]; // Obtém o valor do campo "nome" enviado via POST
        $senha = $_POST["senha"]; // Obtém o valor do campo "senha" enviado via POST
        $email = $_POST["email"]; // Obtém o valor do campo "email" enviado via POST

        $aluno = new Aluno($nome, $senha, $email);

        echo $aluno->salvar();
    ?>
</body>
</html>
