<?php

    /*
    class Coche {
        public function __construct(
            public int $ruedas =4,
            public string $color = "",
            public string $motor = "",
        ) {}


        function arrancar(){
            echo "estoy arrancando<br>";
        }

        function girar(){
            echo "estoy girando<br>";
        }

        function frenar(){
            echo "estoy frenando<br>";
        }

        function estable_color($color_coche,$nombre_coche){
            $this->color = $color_coche;
            echo "El color de " . $nombre_coche . " coche es " . $this-> color . "<br>";
        }
    }
        */


    include("vehiculos.php"); // incluimos las clases

    $renault = new Coche();
    $mazda = new Coche();
    $seat = new Coche();

    $mazda ->girar(); // llamada de metodo
    echo $mazda-> ruedas; // llamada de propiedad

    $mazda->estable_color("rojo","mazda"); // llamammos el metodo de la clase y le pasamos un parametro
    $seat->estable_color("azul", "renault");

    $scania = new Camion();

    echo "El camion tiene " . $scania -> ruedas . " 
    ruedas<br>";

    $scania ->arrancar();
    echo $scania -> color;


    


   
    
?>