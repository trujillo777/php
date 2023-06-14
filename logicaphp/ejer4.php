<?php

 $a=readline("Ingrese una palabra: ");
 
  if ($a==strrev($a)) {
     echo"Si es un palindromo.";
  }
  else{
    echo"No es un palindromo.";
  }
