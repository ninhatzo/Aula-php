function validaFormulario() {

    let campoinicio = document.getElementById("inicio");
    let inicio = campoinicio.value.trim();

    let campofim = document.getElementById("fim");
    let fim = campofim.value.trim();

    if(inicio == "" || isNaN(inicio)) {
        alert("Digite um número válido no campo de ínicio!");
        campoinicio.focus();
        return false;
    } else if(fim == "" || isNaN(fim)) {
        alert("Digite um número válido no campo de fim!");
        campofim.focus();
        return false;
    }else if(inicio >= fim) {
        alert("O fim não pode ser menor ou igual ao ínicio!");
        campoinicio.focus();
        return false;
    }

    return true;
}