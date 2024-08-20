<?php
$filename = "comprobante.txt";

if (file_exists($filename)) {

    $fileContents = file_get_contents($filename);
     echo nl2br($fileContents); 
} 

else 
{  echo "busca por otro lado papi";}
?>