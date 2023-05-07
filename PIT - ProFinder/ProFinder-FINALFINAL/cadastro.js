function validarCadastro() {

    var usuario = document.getElementById("username").value;
    var senha = document.getElementById("password").value;
    var email = document.getElementById("email").value;

    if (usuario == "") {
        alert("O campo (Crie um usuário) deve ser preenchido");
        return false;
    }

    if (senha == "") {
        alert("O campo (Crie sua senha) deve ser preenchido");
        return false;
    }

    if (email == "") {
        alert("O campo (E-mail) deve ser preenchido");
        return false;
    }
    
    alert("Cadastro realizado com sucesso!");
}