<?php 
class Professor{
    private $nomep =""
    private $senhap = ""
    private $emailp = ""


    public function __construct($nomep, $senhap, $emailp){
        $this->nomep = strtoupper($modelop);
        $this->senhap = strtoupper($senhap);
        $this->emailp = strtoupper($emailp);


    }

    public function salvar(){
        /* Aqui tem que colocar um IF em relação aos checkbox tanto de aluno quanto de professor */

        if(Professor){


            $con = new mysqli("localhost", "root", "", /*"nome do banco de dados"*/)
            $stmt = $con->prepare("insert into professor(nome, senha, email) values (?, ?, ?)");
            $stmt = $con->bind_param("sss", $this->nomep, $this->senhap, $this->emailp);
            $stmt->execute();
            $stmt->close();
            $con->close();
            return "professor cadastrado com sucesso";
        }
    }

    public function get_nomep() {
        return $this->nomep;
    }

    public function get_senhap() {
        return $this->senhap;
    }

    public function get_emailp() {
        return $this->emailp;
    }
}
?>