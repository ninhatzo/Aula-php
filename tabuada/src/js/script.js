function validaFormulario() {

    let camponum = document.getElementById("num");
    let num = camponum.value.trim();

    if(num === "" || isNaN(num)) {
        
        alert("Por favor, digite um número válido!");
        camponum.focus();
        return false;
    }

    return true;
}