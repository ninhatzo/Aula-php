<?php

    function sair() {
    echo "<br><a href='../../index.html'>Voltar</a>";
    }  

    // Se o formulário for enviado, procesa o valor
    $resultado = "";
    
    if($_SERVER['REQUEST_METHOD']==="POST") {

        $num = $_POST["num"] ?? '';

    // Validação simples no servidor
        if(is_numeric($num)) {

            sair();
            $resultado .= "<img class='kuromi2' src='../imgs/kuminerd.png' alt='KumiNerd'><div class='container-tabela'><div class='title'>Tabuada do $num</div>
                           <table border='1' cellpadding='5' cellspacing='0' style='border-collapse:collapse; text-align: center;'>";

            for ($i = 1; $i <= 10; $i++) {
                $multiplicacao = $num * $i;
                $resultado .=  "<tr>
                                    <td>$num</td>
                                    <td>x</td>
                                    <td>$i</td>
                                    <td>=</td>
                                    <td>$multiplicacao</td>
                                </tr>";
            }

            $resultado .= "</table></div>";
        } else {
            $resultado = "<img class='kuromi' src='../imgs/kuminerd.png' alt='KumiNerd'><div class='caixa'>Por favor, digite um número válido!</div>";
            sair();
        }

        echo $resultado;
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

.container-tabela {
    position: fixed;
    width: 300px;
    text-transform: uppercase;
    font-size: 40px;
    margin-bottom: 15px;
    color: rgb(130, 98, 133);
    font-weight: bold;
    border-radius: 50px;
    padding: 50px;
    background-color: #ffffff;
    border: 1px solid #ffffff;
    box-shadow: 0 0 5px rgb(255, 255, 255);
}

table {
    margin-left: 20px;
    margin-top: 30px;
    border: 1px solid rgb(130, 98, 133);
    box-shadow: 0 0 2px rgb(130, 98, 133);
    color: rgb(91, 62, 94);
}

td, tr {
    padding: 8px;
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

.kuromi {
    position: fixed;
    width: 10%;
    height: 25%;
    margin-left: -90vh;
    margin-top: -40vh;
    z-index: 5;
}

.kuromi2 {
    position: fixed;
    width: 10%;
    height: 25%;
    margin-left: -30vh;
    margin-top: -80vh;
    z-index: 5;
}
    </style>
</head>
<body>
</body>
</html>