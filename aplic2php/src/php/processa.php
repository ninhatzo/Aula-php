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

            echo "O Campo nome está vazio.<br>";
            //echo "<br><a href='../../index.html'>Voltar</a>";
            sair(); //Chamando a função sair
        } else if(empty($email)) {
            
            echo "O campo E-mail está vazio.<br>";
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