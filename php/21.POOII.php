<?php


class Coche {

    public int $ruedas;
    private string $color; // a las propiedas le agregamos el tipo de dato
    private int $motor;

    // para definir los parametros definidos de la clase hacemos una funcion constructor

    public function __construct() { // metodo constructor, siempre se define con la palabra reservada __construct

        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;

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


}

$renault = new Coche(); // estado inicial de la instancia 
$mazda = new Coche();
$seat = new Coche();



$mazda -> girar(); // llamada a un metodo de clase
echo $mazda-> ruedas; // accedemos a la propiedad ruedas 



?>