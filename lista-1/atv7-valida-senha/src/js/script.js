function validarSenha() {
    const senha = document.getElementById("senha").value;

    // Expressão regular
    const regex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;

    if (!regex.test(senha)) {
        alert("Senha fraca! Use no mínimo 8 caracteres, 1 letra maiúscula e 1 número.");
        return false;
    }

    return true;
}
