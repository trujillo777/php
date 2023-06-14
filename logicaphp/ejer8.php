<?php


$n1 = readline("Inserte el número inicial: ");
$n2 = readline("Inserte el rango final: ");

echo "Números perfectos que se encontraron: ";

for ($i = $n1; $i <= $n2; $i++) {
    $oper = 0;
    
    for ($j = 1; $j <= ($i / 2); $j++) {
        if ($i % $j == 0) {
            $oper = $oper +$j;
        }
    }
    
    if ($oper == $i) {
        echo $i . " ";
    }
}

?>
