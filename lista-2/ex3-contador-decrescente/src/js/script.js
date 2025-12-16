function validar() {
    let numero = document.getElementById("numero").value;

    if (numero === "" || numero < 0) {
        alert("Digite um número válido maior ou igual a zero");
        return false;
    }

    return true;
}
