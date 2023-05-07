function login() {

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "usuario" && password == "senha") {
        alert("Login bem sucedido!");
    } else {
        alert("Nome de usuário ou senha inválidos. Por favor, tente novamente.");
    }

}