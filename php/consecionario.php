<?php

class Compra_Vehiculo{

    private $precio_base;
    private static $ayuda=0;

    public function __construct($gama){
        if($gama== "urbano"){
            $this->precio_base = 10000;
    }   else if($gama== "compacto"){
        $this->precio_base = 20000;
    } else if($gama== "deportivo"){
        $this->precio_base = 50000;
    }
 }

 function climatizador(){
    $this->precio_base += 2000;
 }

 function gps(){
    $this->precio_base += 3000;
 }

 function tapiceria($color){
    if($color== "blanco"){
        $this->precio_base += 2500;
    } else if($color== "rojo"){
        $this->precio_base += 4500;
    } else {
        $this->precio_base += 1000;
    }
 }

 static function descuento(){
    if (date("m-d-y")>"22-11-24") {
        self::$ayuda = 4500;    
    }
  }

 function precio_final(){
    $valor = $this->precio_base-self::$ayuda; // usamos la palabra self para referirnos a la clase
    return $valor;
 }

  

}

?>