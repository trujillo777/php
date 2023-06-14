 <?php

$n = intval(readline("Ingrese un numero: "));
    $conf = 0;
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i != 0) {
        } else {
            $conf = $conf + 10;
        }
    }

if ($n == 1) {
        echo "El dato ingresado no es valido. ";
    } elseif ($n > 1) {
        if ($conf > 0) {
            echo "No es un numero primo";
        } elseif ($conf == 0) {
            echo "Es un numero primo";
        }
    }
    ?>