<html>
<head>
</head>
<body>
<?php
$archivo_pedido = "pedidos.txt"; 

$ar = fopen($archivo_pedido, "r") or die("No es posible abrir el archivo");

while (!feof($ar)) {

    $linea = fgets($ar);

    $linea_formateada = nl2br($linea);

    echo $linea_formateada;

}

fclose($ar); 
?>
</body>
</html>