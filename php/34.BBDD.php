
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table{
            width: 50%;
            border: 1px;
            border-style: inset;
            margin: auto;
        }
    </style>



</head>
<body>
    
</body>




<?php


require("datos_conexion.php");

// conexion por procedimiento - usamos la funcion mysqli_connect 
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


$query="SELECT * FROM ARTÍCULOS WHERE SECCIÓN = 'FERRETERÍA' ";

$resultado = mysqli_query($conexion, $query); // devuelve un resultado en tabla recordset


/*
// manera mia combinada

while(($filas=mysqli_fetch_row($resultado))){
    foreach ($filas as $key => $value) {
        echo "indice>".$key.""."con valor> ".$value."<br>";
        
    }
    
}*/

while (($filas=mysqli_fetch_row($resultado))) {

    echo "<table><tr><td>";


    echo " ".$filas[0] ."</td><td>";
    echo " ".$filas[1]." </td><td>";
    echo " ".$filas[2]."</td><td> ";
    echo " ".$filas[3]." </td><td></tr></table>";
    echo "<br>";
}

// funcion para cerrar la conexion con la BBDD
mysqli_close($conexion);

?>



</html>








