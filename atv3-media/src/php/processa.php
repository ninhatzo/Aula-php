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
    color: #4d4841;
    font-weight: bold;
    text-align: center;
    justify-content: center;
    border-radius: 50px;
    padding: 50px;
    background-color: #ffffff;
    box-shadow: 0 0 15px #211e19;
}

.title {
    text-transform: uppercase;
    text-align: center;
    font-size: 25px;
    color: rgb(130, 98, 133);
    text-shadow: 0 0 5px rgba(0, 0, 0, 0.37);
}

.esnupi1 {
    margin-top: 0vh;
    margin-left:0vh;
}

.esnupi2 {
    margin-top: 0vh;
    margin-left:80vh;
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
    background-color: #413c33;
}

a:hover {
    background-color: #050504;
    color: #ffffff;
}

    </style>
</head>
<body>
    <div class="esnupi1"><img src="../imgs/esnupe.png" alt="esnupe1"></div>
<?php

$media = "";
$soma = "";

function sair() {
    echo "<br><a href='../../index.html'>Voltar</a>";
}

if($_SERVER['REQUEST_METHOD']==="POST") {

    $nota1 = $_POST["nota1"] ?? '';
    $nota2 = $_POST["nota2"] ?? '';
    $nota3 = $_POST["nota3"] ?? '';
    $nota4 = $_POST["nota4"] ?? '';

    if($nota1 === "" || !is_numeric($nota1)) {
        echo "<div class='caixa'>Por favor, digite um valor válido na primeira nota!</div>";
        sair();
    } else if($nota1 < 0 || $nota1 >10) {
        echo "<div class='caixa'>Por favor, digite um valor entre 0 e 10 na primeira nota!</div>";
        sair();
    } else if($nota2 === "" || !is_numeric($nota2)) {
        echo "<div class='caixa'>Por favor, digite um valor válido na segunda nota!</div>";
        sair();
    } else if($nota2 < 0 || $nota2 >10) {
        echo "<div class='caixa'>Por favor, digite um valor entre 0 e 10 na segunda nota!</div>";
        sair();
    } else if($nota3 === "" || !is_numeric($nota3)) {
        echo "<div class='caixa'>Por favor, digite um valor válido na terceira nota!</div>";
        sair();
    } else if($nota3 < 0 || $nota3 >10) {
        echo "<div class='caixa'>Por favor, digite um valor entre 0 e 10 na terceira nota!</div>";
        sair();
    }else if($nota4 === "" || !is_numeric($nota4)) {
        echo "<div class='caixa'>Por favor, digite um valor válido na quarta nota!</div>";
        sair();
    } else if($nota4 < 0 || $nota4 >10) {
        echo "<div class='caixa'>Por favor, digite um valor entre 0 e 10 na quarta nota!</div>";
        sair();
    } else {

    $soma = [(float)$nota1, (float)$nota2, (float)$nota3, (float)$nota4];
    $somaTotal = 0.0;

    for($i = 0; $i<4; $i++) {
        $somaTotal += $soma[$i];
    }

    $media = $somaTotal / 4;

    if($media >= 7) {
        $aprovacao = "aprovado";
    } else {
        $aprovacao = "reprovado";
    }

    echo "<div class='caixa'>A média do aluno é $media. O aluno está $aprovacao!</div>";
    sair();
    }
}

?>
<div class="esnupi2"><img src="../imgs/esnupe.png" alt="esnupe2"></div>
</body>
</html>