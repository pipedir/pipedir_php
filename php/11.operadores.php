<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<p>&nbsp;</p>
<form name="form1" method="post" action="11.operadores.php">
    <p>
        <label for="num1"></label>
        <input type="text" name="num1" id="num1">
        <label for="num2"></label>
        <input type="text" name="num2" id="nfum2">
        <label for="operacion"></label>
        <select name="operacion" id="operacion">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicacion</option>
            <option>Division</option>
            <option>Modulo</option>
            <option>Incremento</option>
            <option>Decremento</opion>
        </select>
    </p>
    <p>
        <input type="submit" name="button" id="button" value="Enviar" onclick="prueba">
    </p>
</form> 
<p>&nbsp;</p>


<?php

    include ("10.operadoresii.php"); // incluimos la funcion para cuando reconozca el click el bloque php la llame
    
    if (isset($_POST["button"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];
        calcular($operacion); // le otorgo un parametro que en este caso remplazaria el valor de $calculo (vease 10.operadoresii.php), ingreso la variable operacion antes recogida del html
    }


?>

</body>
</html>