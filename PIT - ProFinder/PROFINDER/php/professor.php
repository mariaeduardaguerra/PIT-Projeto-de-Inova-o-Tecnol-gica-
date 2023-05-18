<?php

class Professor {

    private $nome = "";
    private $senha = "";
    private $email = "";

    public function __construct($nome, $senha, $email) {

        $this->nome = strtoupper($nome);
        $this->senha = strtoupper($senha);
        $this->email = strtoupper($email);

    }

    public function salvar() {

        $con = new mysqli("localhost", "root", "", "nome_do_banco_de_dados");

        $stmt = $con->prepare("INSERT INTO professor (nome, senha, email) VALUES (?, ?, ?)");

        $stmt->bind_param("sss", $this->nome, $this->senha, $this->email);

        $stmt->execute();
        $stmt->close();
        $con->close();

        return "Professor cadastrado com sucesso";

    }

}

?>
