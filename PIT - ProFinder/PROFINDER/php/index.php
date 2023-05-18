<?php

require_once 'aluno.php';
require_once 'professor.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["aluno"])) {

        $aluno = new Aluno($_POST["nome"], $_POST["senha"], $_POST["email"]);

        $mensagem = $aluno->salvar();

        echo $mensagem;

    } elseif (isset($_POST["professor"])) {

        $professor = new Professor($_POST["nome"], $_POST["senha"], $_POST["email"]);

        $mensagem = $professor->salvar();

        echo $mensagem;

    }

}

?>