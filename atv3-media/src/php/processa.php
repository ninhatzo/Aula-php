<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <style>
        
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: rgb(195, 174, 197);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.caixa {
    position: fixed;
    width: 800px;
    text-transform: uppercase;
    font-size: 40px;
    margin-bottom: 15px;
    color: rgb(130, 98, 133);
    font-weight: bold;
    text-align: center;
    justify-content: center;
    border-radius: 50px;
    padding: 50px;
    background-color: #ffffff;
    border: 1px solid #ffffff;
    box-shadow: 0 0 10px rgb(255, 255, 255);
}

.title {
    text-transform: uppercase;
    text-align: center;
    font-size: 25px;
    color: rgb(130, 98, 133);
    text-shadow: 0 0 5px rgba(0, 0, 0, 0.37);
}

a {
    position: fixed;
    text-decoration: none;
    width: 5%;
    margin-top: -90vh;
    margin-left: -205vh;
    text-align: center;
    padding: 10px;
    font-size: 20px;
    cursor: pointer;
    border-radius: 10px;
    color: #ffffff;
    background-color: rgb(162, 143, 163);
    border: 1px solid rgb(162, 143, 163);
}

a:hover {
    background-color: rgb(118, 92, 119);
    border: 1px solid rgb(118, 92, 119);
    color: #ffffff;
}

    </style>
</head>
<body>
<?php

function sair() {
    echo "<br><a href='../../index.html'>Voltar</a>";
}

//$resultado = "";

if($_SERVER['REQUEST_METHOD']==="POST") {

    $nota1 = $_POST["nota1"] ?? '' || $_POST["nota1"];
    $nota2 = $_POST["nota2"] ?? '';
    $nota3 = $_POST["nota3"] ?? '';
    $nota4 = $_POST["nota4"] ?? '';

    if($nota1 === "" || !is_numeric($nota1)) {
        echo "<div class='caixa'>Por favor, digite um valor válido na primeira nota!</div>";
        sair();
    } else if($nota2 = "" || !is_numeric($nota2)) {
        echo "<div class='caixa'>Por favor, digite um valor válido na segunda nota!</div>";
        sair();
    } else if($nota3 = "" || !is_numeric($nota3)) {
        echo "<div class='caixa'>Por favor, digite um valor válido na terceira nota!</div>";
        sair();
    } else if($nota4 = "" || !is_numeric($nota4)) {
        echo "<div class='caixa'>Por favor, digite um valor válido na quarta nota!</div>";
        sair();
    }
    
}

?>
</body>
</html>