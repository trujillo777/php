<?php


$semana=readline("Ingrese un número del dia de la semana:");

$resultado= match($semana){
    '1' => "Lunes",
    '2' =>"Martes",
    '3'=> "Miercoles",
    '4'=> "Jueves",
    '5'=> "Viernes",
    '6'=> "Sabado",
    '7'=>"Domingo",
    default =>'Número invalido'
};
echo $resultado;
?>