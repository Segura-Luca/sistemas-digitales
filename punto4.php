<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero1 = $_POST["numero1"];

    $numero2 = $_POST["numero2"];

    function sumar($a,$b) 

{  return $a + $b;  }

    $resultado = sumar($numero1, $numero2);

    echo "La suma de $numero1 y $numero2 es: $resultado";
}
?>