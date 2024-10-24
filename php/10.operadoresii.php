<style>

    .resultado{
        color: tomato;
        font-size: medium;
        font-family: Arial, Helvetica, sans-serif;

    }

</style>


<?php


    function calcular($calculo){  // damos parametor a una funcion para pedir este parametro desde la llamada de la variable


        global $num1; // dlecaramos variables globales del if del inicio para que los if puedan acceder a los
        global $num2;

        if (!strcmp("Suma", $calculo)) {
            $resultado=($num1 +$num2);
            echo "<p class='resultado'>El resultado es: $resultado</p>" ;
            
        }
        if (!strcmp("Resta", $calculo)) {
            $resultado=($num1 - $num2);
            echo "<p class='resultado'>El resultado es: $resultado</p>";
        }
        if (!strcmp("Multiplicacion", $calculo)) {
            $resultado=($num1 * $num2);
            echo "<p class='resultado'>El resultado es: $resultado</p>";
        }
        if (!strcmp("Division", $calculo)) {
            $resultado=($num1 / $num2);
            echo "<p class='resultado'>El resultado es: $resultado</p>";
        }
        if (!strcmp("Modulo", $calculo)) {
            $resultado=($num1 % $num2);
            echo "<p class='resultado'>El resultado es: $resultado</p>";
        }
        if (!strcmp("Incremento", $calculo)) {
            $num1++;
            $resultado=$num1;
            echo "<p class='resultado'>El resultado es: $resultado</p>";
        }
        if (!strcmp("Decremento", $calculo)) {
            $num1--;
            $resultado=$num1;
            echo "<p class='resultado'>El resultado es: $resultado</p>";
        }

    }


   

?>