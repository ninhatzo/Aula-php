<?php
    
    function sair() {
        echo "<br><a href='../../index.html'>Voltar</a>";
    }  
    
    
    if($_SERVER['REQUEST_METHOD']==='POST') {

        $num = $_POST['num'] ?? '';

        if(empty($num) || !is_numeric($num)) {

                sair();
                echo "<div class='caixa'>Por favor, digite um número válido.</div><br>"; 
        } else {
        
            if($num % 2 == 0) {

                sair();
                echo "<div class='caixa'>O número ". htmlspecialchars($num)." é par</div><br>"; 
            } else {

                sair();
                echo "<div class='caixa'>O número ". htmlspecialchars($num)." é ímpar</div><br>";
            }
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
    background-color: rgb(230, 239, 241);
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
    color: rgb(72, 101, 107);
    font-weight: bold;
    text-align: center;
    justify-content: center;
    border-radius: 50px;
    padding: 50px;
    background-color: #ffffff;
    border: 1px solid #ffffff;
    box-shadow: 0 0 10px rgba(151, 169, 173, 0.692);
    z-index: 1;
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
    background-color: rgb(155, 186, 192);
    border: 1px solid rgb(155, 186, 192);
}

a:hover {
    background-color: rgb(72, 101, 107);
    border: 1px solid rgb(72, 101, 107);
    color: #ffffff;
}  

.numeros2 {
    margin-left: 100vh;
}
    </style>
</head>
<body>
    <img src="../imgs/numeros.png" alt="Números a esquerda">
    <div class="numeros2"><img src="../imgs/numeros.png" alt="Números a direita"></div>
</body>
</html>