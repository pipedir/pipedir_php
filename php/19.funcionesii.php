<?php

// pasamos el valor por referencia con el & y crea un vinculo entre variables
function incremento(&$valor1){ 
    $valor1++ ;
    return $valor1;
}

 $numero =5;

 echo incremento($numero) . "<br>";

 echo $numero;
 echo "<br>";


function cambia_mayus(&$param){

    $param = strtolower($param);
    $param = ucwords($param);
    return $param;
}

$cadena = "hOLA mUnDo";

echo cambia_mayus($cadena) . "<br>";
echo $cadena;




 
?>