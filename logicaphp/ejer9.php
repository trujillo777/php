<?php
$long = readline("Escriba la longitud del Fibonacci:");

$n1 = 0;
$n2 = 1;
$oper = "$n1$n2";

while (($n1 + $n2) <= $long) {
    $numero3 = $n1 + $n2;
    $oper.= "$numero3";
    $n1 = $n2;
    $n2 = $numero3;
}
echo $oper;

?>