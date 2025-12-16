<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    echo "<h3>Números pares até $numero:</h3>";
    echo "<ul>";

    for ($i = 1; $i <= $numero; $i++) {
        if ($i % 2 == 0) {
            echo "<li>$i</li>";
        }
    }

    echo "</ul>";
}
?>
