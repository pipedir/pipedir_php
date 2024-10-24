<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>

    .resaltar {
        color: red;
        font-weight: bold;
    }

</style>

<?php

 echo "<p class='resaltar'>Este es un ejemplo de texto</p>"; 
 echo "<p class=\"resaltar\">Este es un ejemplo de texto</p>"; 

 $name = "Pipe";
 $uppername = "PIPE";
 echo "Hola $name";
 $output=strcmp($name,$uppername);
 $output=strcasecmp($name,$uppername);
 
echo $output;

if ($output == 1) {
    echo"<br>true";
 }
 else {
    echo"<br>false";
 }



 



?>

    
</body>
</html>