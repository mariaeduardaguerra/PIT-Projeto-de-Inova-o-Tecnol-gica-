<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sistema";

    // Cria a conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $database);

    // Verifica se ocorreu algum erro na conexão
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores do formulário
        $usuario = $_POST["username"];
        $email = $_POST["email"];
        $senha = $_POST["password"];
        $perfil = $_POST["perfil"];

        // Validação básica (pode ser aprimorada conforme suas necessidades)
        if (empty($usuario) || empty($email)  || empty($senha) || empty($perfil)) {
            echo "Por favor, preencha todos os campos.";
        } else {
            // Prepara a consulta SQL
            $stmt = $conn->prepare("INSERT INTO aluno (usuario, email, senha, perfil) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $usuario, $email, $senha, $perfil);

            // Executa a consulta SQL
            if ($stmt->execute()) {
                echo "<script>alert('Cadastro realizado com sucesso!');
                location.href='index.php';
                </script>";
            } else {
                echo "Erro ao cadastrar o usuário: " . $conn->error;
            }

            // Fecha a declaração e a conexão
            $stmt->close();
            $conn->close();
        }
    }
?>