<?php

$cantidad = readline("Ingrese el numero de notas que se ingresarán: \n");
 
    $nota = [];
    $suma = 0;
    for ($i = 1; $i <= $cantidad; $i++) {
        $nota[$i - 1] = floatval(readline("Ingrese Nota: $i :\n"));
        $suma += $nota[$i - 1];
    }
    $prom = $suma / $cantidad;
    echo ("El promedio de las notas es: $prom\n");

