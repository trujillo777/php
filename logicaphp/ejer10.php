<?php

$num = readline("Escribe el total de numeros que desea organizar: ");
$arreglo = [];



for ($i = 0; $i < $num; $i++) {
    $n = readline("Ingrese el número: ");
    $arreglo[$i] = $n;
}
for ($i = 0; $i < $num - 1; $i++) {

    for ($y = 0; $y < $num - $i - 1; $y++) {
        if ($arreglo[$y] > $arreglo[$y + 1]) {

            $ord = $arreglo[$y];

            $arreglo[$y] = $arreglo[$y + 1];
            $arreglo[$y + 1] = $ord;
        }
    }
}
print_r($arreglo);

