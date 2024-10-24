<?php

class Persona {

    // manera antigua de trabajar clases de PHP 8.0 para atras

    /*
    private $nombre;
    private $edad;
    private $genero;
    private $nacionalidad; 
    
    public function __construct($nombre,$edad,$genero,$nacionalidad){
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->genero=$genero;
        $this->nacionalidad=$nacionalidad;
    }
    */

    public function __construct(  // metodo nuevo de constructor
        private string $nombre,
        private int $edad,
        private string $genero,
        private string $nacionalidad,

    ) {}


    // metodos getter

    public function getNom(): string {
        return $this->nombre;
    }

    public function getedad(): int {
        return $this->edad;
    }
    public function getGenero(): string {
        return $this->genero;
    }

    public function getNacionalidad(): string {
        return $this->nacionalidad;
    }
    
    // metodo setter 

    public function setNom($nombre){
        $this->nombre = $nombre;
    }
    public function setedad(int $edad){
        $this->edad = $edad;
    }
    public function setGenero(string $genero){
        $this->genero = $genero;
    }
    public function setNacionalidad(string $nacionalidad){
        $this->nacionalidad = $nacionalidad;
    }

       

}


?>