<?php

$n = intval (readline("Ingrese el numero el cual desde hallar su factorial:"));
$multip=1;


for ($i=1; $i<=$n; $i++) { 
    $multip = $multip* $i;
    
}


echo $multip;

?>