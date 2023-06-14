<?php


$nota = readline('ingrese su nota de 0 a 100: ');

$mensaje = match (true) {
    $nota >= 90 && $nota <= 100 => "Excelente",
    $nota >= 80 && $nota <= 90 => "Muy bien",
    $nota >= 70 && $nota <= 80 => "Bien",
    $nota >= 60 && $nota <= 70 => "Suficiente",
    $nota >= 0 && $nota <= 60 => "Insuficiente",
    default => "incorrecta"
};

echo $mensaje;
?>
