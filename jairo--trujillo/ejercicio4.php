<?php
$fecha=readline("Ingrese una fecha DD-MM-AA:");

$resultado= match($fecha){
    '01-01-2023' => 'Inicio de año',
    '14-02-2023'=> 'San valentin',
    '8-03-2023' => 'El dia de la mujer',
    '8-04-2023'=> 'Cumple años mi hermana Sofía',
    '12-05-2023' => 'El dia de la madre',
    '26-06-2023'=> 'Cumplo años',
    '22-07-2023' => 'Cumple mi Papá',
    '7-08-2023'=> 'El dia que compre el computador',
    '01-09-2023' => 'El mes del amor y amistad',
    '12-10-2023'=> 'El mes de Hallween',
    '22-11-2023' => 'Casi se acaba el año',
    '28-12-2023' => 'Fin de año',
    default => 'Ingrese un mes correctamente'
};

echo $resultado;





?>