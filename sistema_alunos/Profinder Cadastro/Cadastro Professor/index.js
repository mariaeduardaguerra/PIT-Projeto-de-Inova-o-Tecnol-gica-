function togglePasswordVisibility() {
    var passwordField = document.getElementById("password-field");
    var toggleButton = document.getElementById("toggle-button");
    
    if (passwordField.type === "password") {
      passwordField.type = "text";
      passwordField.classList.add("white-text");
      toggleButton.textContent = "Ocultar";
    } else {
      passwordField.type = "password";
      passwordField.classList.add("white-text");
      toggleButton.textContent = "Mostrar";
    }
  }