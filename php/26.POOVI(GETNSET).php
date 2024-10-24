<?php
class Coche { // clase padre - super clase
    public function __construct(
        protected int $ruedas = 4, // se declara protected para poder ser accesible desde la clase camion que la hereda
        public string $color = "",
        protected int $motor = 1600,
        ) {}

    function get_ruedas(){ // establecemos el metodo get
        return $this->ruedas;
    }

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

    function get_motor(){
       return $this->motor;
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
$scania = new Camion();

$mazda ->girar(); // llamada de metodo

echo $mazda->get_ruedas(). "<br>"; // llamamos el metodo get para obtener el valor de la propiedad

echo "el vehiculo tiene " . $mazda->get_ruedas() . "  llantas<br>"; // llamamos get 
echo "el camion tiene " . $scania->get_ruedas() . "  llantas<br>"; // llamamos get 
echo "el camion tiene un motor de " . $scania->get_motor() . "  CC.<br>"; // llamamos get 
echo "el carro tiene un motor de " . $mazda->get_motor() . "  CC.<br>"; // llamamos get 



