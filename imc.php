<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $altura = floatval($_POST["altura"]);
        $peso = floatval($_POST["peso"]);

        // Verifica se altura e peso são válidos
        if ($altura > 0 && $peso > 0) {
            // Calcula o IMC
            $imc = $peso / ($altura * $altura);

            // Exibe o resultado do IMC
            echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";
        } else {
            echo "<p>Por favor, insira valores válidos para altura e peso.</p>";
        }
    }
    ?>
