<?php
class Coche { // clase padre - super clase
    public function __construct(
        private int $ruedas = 4,
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

class Camion extends Coche { // con la palabra reservada extends aplicamos la herencia de la clase coche // clase hijo - sub clase
    public function __construct(
        public int $ruedas =8,
        public string $color = "gris",
        public int $motor = 2600,
    ) {}

    function estable_color($color_camion,$nombre_camion){ // podemos modificar el comportamiento de un metodo de clase reescribiendolo
        $this->color = $color_camion;
        echo "El color de " . $nombre_camion . " camion es " . $this-> color . "<br>";
    }

    function arrancar(){
        parent::arrancar(); // con la palabra reservada parent decimos que llame el metodo de la clase padre primero y despues sumamos mas codigo a ese metodo
        echo "Camion arrancado";
    }

}



$renault = new Coche();
$mazda = new Coche();
$seat = new Coche();
$mazda ->ruedas=7;

$mazda ->girar(); // llamada de metodo

echo $mazda-> ruedas . "<br>"; // llamada de propiedad

echo "el vehiculo tiene " . $mazda->ruedas . "  llantas";




?>  