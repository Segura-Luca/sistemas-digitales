<head>
</head>
<body>
  
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $nombre = $_POST["nombre"];

        $direccion = $_POST["direccion"];

        $pizzas = $_POST["pizzas"];
    
        $archivo = fopen("pedidos.txt", "a") 

or die("Error");
    
        fputs($archivo, "Nombre: $nombre\n");
        fputs($archivo, "Dirección: $direccion\n");
        foreach ($pizzas as $pizza) {
            fputs($archivo, "$pizza\n");
        }
        fputs($archivo);
    
        fclose($archivo);
    }
    ?>
</body>
</html