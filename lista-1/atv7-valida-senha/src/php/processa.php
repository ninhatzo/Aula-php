<?php
$senha = $_POST['senha'];

$regex = '/^(?=.*[A-Z])(?=.*\d).{8,}$/';

if (preg_match($regex, $senha)) {
    echo "Senha aceita";
} else {
    echo "Senha fraca";
}
?>
