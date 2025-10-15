let formulario = document.getElementById("forms");
let contador = document.getElementById("contador");

let campoMensagem = document.getElementById("mensagem");
let mensagem = campoMensagem.value.trim();

function validaFormulario() {

    if(mensagem == "") {
        alert("Campo vazio!");
        campoMensagem.focus();
        return false;
    }

    return true;
}

formulario.addEventListener("input", () => {

let mensagem = campoMensagem.value;

let array = mensagem.match(/\b\w+\b/gi);

contador.innerText = "Quantidade de palavras: " + array.length;

});