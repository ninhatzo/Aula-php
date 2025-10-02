<?php

// $_POST -> É uma super global, que armazena dados de forma automática 
// Armazena dados vindo de uma requisição HTTP.
// No caso de $_POST, ele contém dados enviados via método POST em um formulário HTML
// ['nome'] -> É o índice(ou chave) usado para acessar um elemento específico do array associativo.
// Neste exemplo, nome é um atributo "name" do campo do formulário HTML.
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    echo "<h2> Dados recebidos:</h2>";
    echo "Nome: ". htmlspecialchars($nome)."<br>";
    echo "E-mail: ". htmlspecialchars($email)."<br>";

?>