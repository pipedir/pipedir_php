<?php

    class Coche {
        public function __construct(
            public int $ruedas =4,
            public string $color = "",
            public int $motor = 1600,
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

    class Camion {
        public function __construct(
            public int $ruedas =8,
            public string $color = "gris",
            public int $motor = 2600,
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

    }

    


   
    
?>