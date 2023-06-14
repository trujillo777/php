<?php

$vocales=readline("Escriba una vocal: ");
$resultado = match ($vocales){
    'a' => 'es una vocal',
    'e' => 'es una vocal',
    'i' => 'es una vocal',
    'o' => 'es una vocal',
    'u' => 'es una vocal',
    default => 'No es una vocal'  
};

echo $resultado;
 