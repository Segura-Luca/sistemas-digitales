<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    function esParoImpar($num) {
        return $num % 2 == 0;
    }
    $resultado = esParoImpar($numero);
    echo $resultado ? "es parrr." : "impar rey";
}
?>