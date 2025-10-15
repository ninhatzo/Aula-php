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
    background-color: rgb(255, 255, 255);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.caixa {
    position: fixed;
    width: 500px;
    text-transform: uppercase;
    font-size: 40px;
    margin-bottom: 15px;
    color: #8da2ff;
    font-weight: bold;
    text-align: center;
    justify-content: center;
    border-radius: 50px;
    padding: 50px;
    background-color: #ffffff;
    box-shadow: 0 0 15px #8da2ff;
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
    background-color: #8da2ff;
}

a:hover {
    background-color: #6274c9;
    color: #ffffff;
}

    </style>
</head>
<body>
<?php

function sair() {
    echo "<br><a href='../../index.html'>Voltar</a>";
}

    if($_SERVER['REQUEST_METHOD']==="POST") {

        $email = $_POST["email"] ?? '';

        if($email == "") {
            echo "<div class='caixa'>Digite um E-mail!</div>";
            sair();
        } else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            echo "<div class='caixa'>Este não é um E-mail válido!</div>";
            sair();
        } else {
    
        echo "<div class='caixa'>Seu E-mail $email foi validado!</div>";
        sair();
    }  
}

?>
</body>
</html>