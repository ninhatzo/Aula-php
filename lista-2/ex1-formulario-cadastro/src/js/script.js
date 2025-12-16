function validar() {
    let nome = document.getElementById("nome").value;
    let email = document.getElementById("email").value;
    let idade = document.getElementById("idade").value;

    let nomeOk  = /^[A-Za-z\s]+$/;
    let emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let idadeOk = /^[0-9]+$/;

    if (!nomeOk.test(nome)) {
        alert("Nome inválido");
        return false;
    }

    if (!emailOk.test(email)) {
        alert("Email inválido");
        return false;
    }

    if (!idadeOk.test(idade)) {
        alert("Idade inválida");
        return false;
    }

    return true;
}
