<?php


 $color = readline("Escriba un color: ");

 $resultado = match($color){
    'morado' => 'es el color de las uvas',
    'azul' => 'es el color del jabon rey',
    'cafe' =>'es el color de mis ojos',
    default => 'Este color no está disponible'
    
 };

  echo $resultado;



