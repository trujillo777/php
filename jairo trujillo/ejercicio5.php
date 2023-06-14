<?php
$n1 = readline("digite un numero:");
$n2 = readline("digite un numero:");

if ($n1 > 10 && $n2 >10 ) {
    echo "son mayores a 10";
}elseif ($n1 > 10 && $n2 < 10 ) {
    echo "solo un numero es mayor que 10";
}elseif ($n1 < 10 && $n2 > 10 ) {
    echo "solo un numero es mayor que 10";
}else {
    echo"ninguno de los numeros es mayor a 10";
}

?>
