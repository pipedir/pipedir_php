<?php


class guitarra{

   public $precio;
    public $cuerdas;
    public $marca;
    public $cable;
    public $tremol;



    public function __construct($tipo)
    {
        if($tipo== "fender"){
            $this->precio = "1000";
            $this->cuerdas = "6";
            $this->marca = "Fender StratoCaster";
            $this->cable = "false";
            $this->tremol = "true";
    } else {
        echo "Elige una marca de guitarra valida! ";
    }
    }

    public function precio(){
        $valortotal = $this->precio;
        echo "El precio de la guitarra es" .
        $valortotal;
    }
    
    public function propiedades(){
        
    }
}


$guitarra1 = new guitarra("fender");
echo $guitarra1->precio();




?>