<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

h1 {
    text-align: center;

}

table {
    background-color: yellow;
    padding: 5px;
    border: 5px solid;

}

.no-valido{
    font-size:18px;
    color:red;
    font-weight:bold;

}

.valido{
    font-size:18px;
    color:green;
    font-weight:bold;
    
}

</style>
</head>



<body>

<h1>Usando Operadores Commparacion</h1>

<form action="operadores.php" method="post" name="datos_usuario" id="datos_usuario">
<table width="15%" align="center">
        <tr>
            <td>Nombre:</td>
            <td><label for="nombre_usuario"></label>
                <input type="text" name="nombre_usuario" id="nombre_usuario">
            </td>
        </tr>
        <tr>
            <td>Edad:</td>
            <td><label for="edad_usuario"></label>
                <input type="text" name="edad_usuario" id="edad_usuario">
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="enviado" id="enviado" value="Enviar"></td>
        </tr>
    </table>    
</form> //comunicamos con el parametro action para llamar un .php externo
    






</body>




</html>