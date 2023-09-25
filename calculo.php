<?php
        $valor_dolar = $_GET["valor_dolar"];
        $taxa_cambio = 4.26; // Taxa de câmbio fixa (substitua pela taxa atual)

        $valor_real = $valor_dolar * $taxa_cambio;

        echo "<p>$valor_dolar dólar(es) equivale(m) a $valor_real reais.</p>";
    
 ?>
