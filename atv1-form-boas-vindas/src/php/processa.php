<?php
    
    function sair() {
        echo "<br><a href='../../index.html'>Voltar</a>";
    }  
    
    
    if($_SERVER['REQUEST_METHOD']==='POST') {

        $nome = $_POST['nome'] ?? '';

        if(empty($nome)) {

            sair();
            echo "<div class='caixa'>Por favor, digite seu nome!</div><br>"; 

        } else if(!empty($nome)) {

            sair();
            echo "<div class='caixa'>Boas-Vindas ". htmlspecialchars($nome). "!</div><br>";
        }
    }
?>

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
    background-color: rgb(241, 230, 230);
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
    color: rgb(180, 132, 132);
    font-weight: bold;
    text-align: center;
    justify-content: center;
    border-radius: 100px;
    padding: 50px;
    background-color: #ffffff;
    border: 1px solid #ffffff;
    box-shadow: 0 0 10px rgba(194, 155, 155, 0.589);
    z-index: 1;
}

.title {
    text-transform: uppercase;
    font-size: 20px;
    margin-bottom: 15px;
    color: rgb(108, 141, 148);
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
    border-radius: 100px;
    color: #ffffff;
    background-color: rgb(179, 131, 131);
    border: 1px solid rgb(179, 131, 131);
}

a:hover {
    background-color: rgb(131, 89, 89);
    border: 1px solid rgb(131, 89, 89);
    color: #ffffff;
}

.flor-esq-sup {
    position: fixed;
    margin-left: -301vh;
    margin-top: 90vh;
    height: 50px;
    width: 100%;
    transform: rotate(180deg);
    z-index: 5;
}

.flor-dir-sup {
    position: fixed;
    margin-left: 301vh;
    margin-top: -90vh;
    height: 50px;
    width: 100%;
    z-index: 5;
}
    
    </style>
</head>
<body>
<div class="flor-esq-sup"><img src="../imgs/flor-dir-sup.png" alt="Flor branca superior esquerda"></div>
<div class="flor-dir-sup"><img src="../imgs/flor-dir-sup.png" alt="Flor branca superior direita"></div>
</body>
</html>