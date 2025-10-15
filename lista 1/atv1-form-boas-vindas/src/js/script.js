function validaFormulario() {

    let nome = document.getElementById("nome").value.trim();

    if(nome==="" || email==="") {
        
        alert("Por favor, digite seu nome!");
        return false;
    }

    return true;
}