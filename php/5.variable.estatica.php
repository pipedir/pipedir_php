<?php

function counter(){

    static $a = 0; // usamos static para declarar una variable estatica y a no pierda su valor cadfa vez que sea llamada la funcion
    $a++;
    echo $a;

}

counter();
counter();
counter();


?>