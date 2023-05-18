<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>listar professores</title>
</head>

<body>

    <?php

        // configuração de conexão com o banco de dados
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "nome_do_banco_de_dados";

        // conexão com o banco de dados
        $con = new mysqli($host, $username, $password, $dbname);

        // verificar se a conexão foi bem-sucedida
        if ($con->connect_error) {
            die("falha na conexão com o banco de dados: " . $con->connect_error);
        }

        // preparar a consulta SQL
        $stmt = $con->prepare("SELECT * FROM professor");

        // executar a consulta
        $stmt->execute();

        // obter os resultados da consulta
        $result = $stmt->get_result();

        // exibir os registros
        // htmlspecialchars é pra coverter caracteres especiais em entidades HTML
        while ($row = $result->fetch_assoc()) {
            $nome = htmlspecialchars($row["nome"]);
            $senha = htmlspecialchars($row["senha"]);
            $email = htmlspecialchars($row["email"]);
            echo $nome, " - ", $senha, " - ", $email, "<br>";
        }

        // fdechar as conexões e liberar os recursos
        $result->close();
        $stmt->close();
        $con->close();
        
    ?>

    <p>
        <a href="index.php">voltar</a>
    </p>

</body>

</html>
