<?php

$lista = readline("Ingrese una lista de datos (separelos por coma y no deje espacios): ");
$arreglo = explode(",", $lista);


$elem = readline("Escriba el nombre del dato que desea buscar en la lista anterior: ");
$pos = -1;
for ($i = 0; $i < count($arreglo); $i++) {
 if ($elem == $arreglo[$i]) {
        $pos += $i + 1;
    }
}


echo "El dato $elem se encuentra en la posicion $pos.";


