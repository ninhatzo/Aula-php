<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['submit'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background: rgb(230, 239, 241);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 97vh;
        }

        .resultado {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 3px rgba(149, 182, 189, 0.616);
            background-color: #ffffff;
            border: 1px solid #ffffff;
            width: 350px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        p {
            margin: 10px 0;
            font-size: 16px;
        }

        span {
            font-weight: bold;
        }

        .caixa-btn-voltar {
            text-align: center;
        }

        a {
            width: 25%;
            padding: 10px;
            font-size: 18px;
            text-decoration: none;
            border-radius: 5px;
            color: #ffffff;
            background-color: rgb(191, 214, 219);
            border: 1px solid rgb(191, 214, 219);
        }

        a:hover {
            background-color: rgb(138, 171, 179);
            border: 1px solid rgb(138, 171, 179);
            color: #ffffff;
        }

    </style>
</head>
<body>

        <div class="resultado">
            <h2>Dados Recebidos</h2>
            <!-- Use span quando quiser aplicar css em parte de um texto ---> 
            <p><span>Nome: </span><?php echo htmlspecialchars($nome);?></p>
            <p><span>E-mail: </span><?php echo htmlspecialchars($email);?></p>
            <p><span>Mensagem: </span><?php echo htmlspecialchars($mensagem);?></p>
            <br>
            <div class="caixa-btn-voltar">
                <?php echo "<br> <a href='../../index.html'>Voltar</a>";?>
            </div>
        </div>
</body>
</html>