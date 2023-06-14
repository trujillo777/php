<?php


$edad = readline("ingrese porfavor su edad su edad ");

if ($edad >= 18) {
    echo " tienes licencia de conducir:";
        $n2 = readline("");
            if ($n2 == "si") {
            echo "puedes conducir ";
}
else{
    echo " debes tener la licencia de conducir primero ";
}
}
else{
    echo "no puedes conducir";
}  

?>
