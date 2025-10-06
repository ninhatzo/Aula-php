function validaFormulario() {

// A função trim() serve para remover possíveis espaços em branco no inicio ou no final do input do campo.

    let camponome = document.getElementById("nome");
    let nome = camponome.value.trim();

    let campoemail = document.getElementById("email");
    let email = campoemail.value.trim();

    let campomensagem = document.getElementById("mensagem");
    let mensagem = campomensagem.value.trim();

    if(nome==="") {
        alert("Preencher o campo nome!");
        camponome.focus();
        return false;
    } else if(email==="") {
        alert("Preencha o campo E-mail!");
        campoemail.focus();
        return false;
    } else if (mensagem==="") {
        alert("Preencha o campo de mensagem!");
        campomensagem.focus();
        return false;
    }

    return true;
}