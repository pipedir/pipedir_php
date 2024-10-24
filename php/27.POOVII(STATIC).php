<?php

    include("consecionario.php");

   //    Compra_Vehiculo::$ayuda=10000; // de esta manera hacemos referencia a la variable estatica $ayuda


   Compra_Vehiculo::descuento() ; // accedemos al metodo propio de la clase no de la instancia por medio de los dos puntos

    $cliente1 = new Compra_Vehiculo("deportivo");
    $cliente1 ->climatizador();
    $cliente1 -> tapiceria("rojo");

    echo "El precio del vehiculo total es: " . $cliente1->precio_final() ." dolares<br>";

    $cliente2 = new Compra_Vehiculo("compacto");
    $cliente2 ->climatizador();
    $cliente2 -> tapiceria("blanco");

    echo "El precio del vehiculo total es: " . $cliente2->precio_final() ." dolares<br>";



?>