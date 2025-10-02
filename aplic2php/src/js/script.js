function validaFormulario() {

        let nome = document.getElementById("nome").value.trim();
        let email = document.getElementById("email").value.trim();
    
        if(nome==="" || email==="") {
            
            alert("Preencher todos os campos!");
            return false;
        }
    
        return true;
    }