function validaFormulario() {

    let campoEmail = document.getElementById("email");
    let email = campoEmail.value.trim();
    let regex = /^[A-Za-z0-9_\-.]{2,}@(gmail|outlook|hotmail)\.com(\.br)?$/;

    if(email == "" || !regex.test(email)) {
        alert("Por favor, digite um e-mail válido!");
        campoEmail.focus();
        return false;
    }

    return true;
}