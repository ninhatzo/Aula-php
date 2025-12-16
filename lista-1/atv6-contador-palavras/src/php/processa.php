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

    session_start();

function sair() {
    echo "<br><a href='../../index.html'>Voltar</a>";
}

    if($_SERVER['REQUEST_METHOD']==="POST") {

        $mensagem = $_POST["mensagem"] ?? '';

        if($mensagem == "") {
            echo "<div class='caixa'>Campo de texto vazio, digite algo válido!</div>";
            sair();
        } else {

            $palavras = str_word_count($mensagem, 1, 'áéíóúàêôãõç-');

            $totalPalavras = count($palavras);

            if ($totalPalavras < 20) {
                echo "<div class='caixa'>O texto é curto! Tem $totalPalavras palavras.</div>";
                sair();
            } else if ($totalPalavras >= 20 && $totalPalavras < 50 ) {
                echo "<div class='caixa'>O texto é médio! Tem $totalPalavras palavras.</div>";
                sair();
            } else if ($totalPalavras > 50) {
                echo "<div class='caixa'>O texto é longo! Tem $totalPalavras palavras.</div>";
                sair();
            }
        }
}

?>
</body>
</html>

