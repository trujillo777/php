
<?php


$opcion = readline("Ingrese una un número como opción del 1 al 5: ");


$resultado = match ($opcion) {
    '1' => 
         "Opción 1. Realizar acción 1.",

    '2' => 
         "Opción 2. Realizar acción 2.",

    '3' => 
         "Opción 3. Realizar acción 3." ,

    '4' => 
         "Opción 4. Realizar acción 4.",

    '5' => 
         "Opción 5. Realizar acción 5." ,
    
    default => 
         "Por favor ingrese una opción del 1 al 5."
    
};

echo $resultado;

