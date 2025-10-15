function validaFormulario() {

    let camponota1 = document.getElementById("nota1");
    let nota1 = camponota1.value.trim();

    let camponota2 = document.getElementById("nota2");
    let nota2 = camponota2.value.trim();

    let camponota3 = document.getElementById("nota3");
    let nota3 = camponota3.value.trim();

    let camponota4 = document.getElementById("nota4");
    let nota4 = camponota4.value.trim();

    if(nota1 == "" || isNaN(nota1)) {
        alert("Por favor, digite um valor válido na primeira nota!");
        camponota1.focus();
        return false;
    } else if (nota1 < 0 || nota1 > 10) {
        alert("Por favor, digite um valor entre 0 e 10 na primeira nota!");
        camponota1.focus();
        return false;
    }

    if(nota2 == "" || isNaN(nota2)) {
        alert("Por favor, digite um valor válido na segunda nota!");
        camponota2.focus();
        return false;
    } else if (nota2 < 0 || nota2 > 10) {
        alert("Por favor, digite um valor entre 0 e 10 na segunda nota!");
        camponota2.focus();
        return false;
    }

    if(nota3 == "" || isNaN(nota3)) {
        alert("Por favor, digite um valor válido na terceira nota!");
        camponota3.focus();
        return false;
    } else if (nota3 < 0 || nota3 > 10) {
        alert("Por favor, digite um valor entre 0 e 10 na terceira nota!");
        camponota3.focus();
        return false;
    }

    if(nota4 == "" || isNaN(nota4)) {
        alert("Por favor, digite um valor válido na quarta nota!");
        camponota4.focus();
        return false;
    } else if (nota4 < 0 || nota4 > 10) {
        alert("Por favor, digite um valor entre 0 e 10 na quarta nota!");
        camponota4.focus();
        return false;
    }

    return true;
}