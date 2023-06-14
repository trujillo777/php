<?php


$var = readline ("Ingrese un numerdo del dia de la semana ");

if ($var == 1){
    echo "Lunes";
}

elseif ($var == 2){
    echo "Martes";
}

elseif ($var == 3){
    echo "Miercoles";
}


elseif ($var == 4){
    echo "Jueves";
}


elseif ($var == 5){
    echo "Viernes";
}



elseif ($var == 6){
    echo "Sabado";
}


elseif ($var == 7){
    echo "Domingo";
}

else {
    echo "El numero es invalido";
}