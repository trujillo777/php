<?php

$CONST = "juan";
$var = readline ("Por favor ingrese su nombre ");
if ($var != $CONST):
    echo "<p> lo siento, no te conozco";

else: 
    echo "<p> Hola $CONST";
endif;

?>