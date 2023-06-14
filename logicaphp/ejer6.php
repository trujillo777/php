<?php


$d = readline("Escribe el número el cual desde invertir: ");
$txt = (string) $d;
$val = "";


for ($i = strlen($txt) - 1; $i >= 0; $i--) {
    $val .= $txt[$i];
}
echo "El numero invertido es: " . (int) $val . "\n";

?>