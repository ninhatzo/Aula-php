<?php
    
    // Declarando função

    function sair() {
        echo "<br><a href='../../index.html'>Voltar</a>";
    }
    
    if($_SERVER['REQUEST_METHOD']==='POST') {

        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';

        //Verificar se o campo está vazio
        if(empty($nome)) {

            echo "<div class='caixa'>O Campo nome está vazio.</div><br>";
            //echo "<br><a href='../../index.html'>Voltar</a>";
            sair(); //Chamando a função sair
        } else if(empty($email)) {
            
            echo "<div class='caixa'>O campo E-mail está vazio.</div><br>";
            //echo "<br><a href='../../index.html'>Voltar</a>";
            sair(); //Chamando a função sair
        } else if(!empty($nome)&& !empty($email)) {
            echo "Nome: ". htmlspecialchars($nome). "<br>";
            echo "E-mail: ". htmlspecialchars($email). "<br>";
            //echo "<br><a href='../../index.html'>Voltar</a>";
            sair(); //Chamando a função sair
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
    background-color: rgb(239, 241, 230);
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
    color: rgb(176, 192, 139);
    font-weight: bold;
    text-align: center;
    justify-content: center;
    border-radius: 50px;
    padding: 50px;
    background-color: #ffffff;
    border: 1px solid #ffffff;
    box-shadow: 0 0 3px rgb(221, 223, 207);
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
    background-color: rgb(204, 212, 167);
    border: 1px solid rgb(204, 212, 167);
}

a:hover {
    background-color: rgb(171, 182, 122);
    border: 1px solid rgb(171, 182, 122);
    color: #ffffff;
} 
    </style>
</head>
<body>
</body>
</html>