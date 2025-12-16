<?php
    session_start();

    if (!isset($_SESSION['frutas'])) {
        $_SESSION['frutas'] = [];
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        if (isset($_POST['adicionar'])) {
            $novaFruta = trim($_POST['fruta']);

            if($novaFruta !== '') {
                $_SESSION['frutas'][] = $novaFruta;
            }
        }

        if (isset($_POST['limpar'])) {
            $_SESSION['frutas'] = [];
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de frutas</title>
</head>
<body>
    <h2>Lista de Frutas</h2>

    <form method="post">
        <input type="text" name="fruta"  placeholder="Digite uma fruta" require>
        <button type="submit" name="adicionar">Adicionar</button>
        <button type="submit" name="limpar">Limpar</button>
    </form>

    <h3>Frutas inseridas:</h3>
    <ul>
        <?php
            if (!empty($_SESSION['frutas'])) {
                foreach ($_SESSION['frutas'] as $frutas) {
                    echo "<li>".htmlspecialchars($frutas)."</li>";
                }
            } else {
                echo "<li>Nenhuma fruta adicionada ainda</li>";
            }
        ?>
    </ul>
</body>
</html>