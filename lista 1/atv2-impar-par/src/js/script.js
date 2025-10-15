function validaFormulario() {

    let num = document.getElementById("num").value.trim();

    if(num === "" || isNaN(num)) {
        
        alert("Por favor, digite um número válido!");
        return false;
    }

    return true;
}