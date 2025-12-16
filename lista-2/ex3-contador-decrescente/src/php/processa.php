<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    echo "<h3>Contagem decrescente:</h3>";

    while ($numero >= 0) {
        echo $numero . "<br>";
        $numero--;
    }
}
?>
