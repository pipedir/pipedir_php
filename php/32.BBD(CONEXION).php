<?php

// conexion por procedimiento - usamos la funcion mysqli_connect 

$db_host="localhost"; $db_name="pruebas"; $db_user= "root"; $db_pass= ""; 
$conexion=mysqli_connect($db_host,$db_user,$db_pass, $db_name); // parametros de funcion
$con2= new mysqli(); // funcion de conexion php 5 arriba

$query="SELECT * FROM DATOSPERSONALES";

$resultado = mysqli_query($conexion, $query); // devuelve un resultado en tabla recordset

$filas = mysqli_fetch_row($resultado);

foreach ($filas as $key => $value) {
    echo "indice>".$key.""."con valor> ".$value."<br>";
}



?>