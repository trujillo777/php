<?php
$string= readline("Ingrese una cadena de texto:");

 
$resultado= match (true){

    strlen($string) >=10 =>"La cadena es larga",

default => "La cadena es corta"
};

echo $resultado;
?>