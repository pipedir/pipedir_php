<?php

// manera clasica

$datos=[1,2,3];

/*
$a=$datos[0];
$b=$datos[1];  
$c=$datos[2];*/


// actualizacion de manejo de matrices

[$a,$b,$c] = $datos;

echo "$a<br>$b<br>$c<br>";


// asociar funcion a unas variables que devuelve un array con objetos
function get_cordenadas(){
    return[12.34, 56.48];
}
[$lat,$long] = get_cordenadas();
echo "$lat<br>$long<br>";



// array asociativo

$persona = [
    "nombre"=> "pipe",
    "edad" => 21,
    "ciudad" => "manila",
];

["nombre"=>$name,"edad"=>$age,"ciudad"=>$city]=$persona;

echo "Nombre> $name<br>
Edad> $age<br>
Ciudad> $city<br>"




?>