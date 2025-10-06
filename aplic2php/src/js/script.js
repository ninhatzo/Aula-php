function validaFormulario() {

        let camponome = document.getElementById("nome");
        let nome = camponome.value.trim();

        let campoemail = document.getElementById("email");
        let email = campoemail.value.trim();

        if(nome==="") {
            alert("Preencher o campo nome!");
            camponome.focus();
            return false;
        } else if(email==="") {
            alert("Preencha o campo E-mail!");
            campoemail.focus();
            return false;
        }
        return true;
    }