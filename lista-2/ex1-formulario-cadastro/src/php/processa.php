<?php

if (isset($_POST["nome"])) {

    $nome  = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];

    if (!preg_match("/^[A-Za-z\s]+$/", $nome)) {
        echo "Erro no nome";
    } elseif (strpos($email, "@") === false) {
        echo "Erro no email";
    } elseif (!preg_match("/^[0-9]+$/", $idade)) {
        echo "Erro na idade";
    } else {
        echo "Cadastro realizado com sucesso";
    }

} else {
    echo "Dados não enviados";
}

?>