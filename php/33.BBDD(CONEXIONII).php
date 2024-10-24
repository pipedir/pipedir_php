<?php

// conexion por procedimiento - usamos la funcion mysqli_connect 

$db_host="localhost"; $db_name="pruebas"; $db_user= "root"; $db_pass= ""; 
$conexion=mysqli_connect($db_host,$db_user,$db_pass); // parametros de funcion - retiramos el parametro de la base de datos y especificamos con la funcion mas adelante

// metodo de error

if(mysqli_connect_errno()){
    echo "Fallo al conectar la base de datos";
    exit();
}
//funcion para seleccionar la base de datos

mysqli_select_db($conexion,$db_name) or die ("No se encuentra la base de datos");

// para verificar tildes y caracteres
mysqli_set_charset( $conexion,"utf8");



$query="SELECT * FROM DATOSPERSONALES";

$resultado = mysqli_query($conexion, $query); // devuelve un resultado en tabla recordset

/*
// modo simio
$flag = 1;
while ($flag <= 4) {
    $filas = mysqli_fetch_row($resultado);
   echo "".$filas[0];
   echo "".$filas[1];
   echo "".$filas[2];
   echo "".$filas[3];
   $flag++;
}
*/

/*
// modo 1
while (($filas=mysqli_fetch_row($resultado))) {

    echo " ".$filas[0] ." ";
    echo " ".$filas[1]." ";
    echo " ".$filas[2]." ";
    echo " ".$filas[3]." ";
    echo "<br>";
} */


// manera mia combinada

while(($filas=mysqli_fetch_row($resultado))){
    foreach ($filas as $key => $value) {
        echo "indice>".$key.""."con valor> ".$value."<br>";
    }
    
}

// funcion para cerrar la conexion con la BBDD
mysqli_close($conexion);

?>