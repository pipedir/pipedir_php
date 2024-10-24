<?php 

    $a = "Pipe";

    echo(strtolower($a));

    function suma($num1, $num2){
        $resultado =$num1+$num2;
        return $resultado;
    }

    suma(2,3);



    function paga($num1, $num2){


        $deuda = 1000;
        $res = $num1+$num2 - $deuda;
        return $res;

        
    }

    echo paga(1980,4350);


    function frase_mayus($frase,$conversion=true){
        $frase = strtolower($frase);
        if  ($conversion == true){
            $resultado = ucwords($frase);
        } else {
            $resultado = strtoupper($frase);
        }
        return $resultado;
    }
    echo frase_mayus("esta es una prueba",);
    echo frase_mayus("esta es una prueba", false);
    



?>