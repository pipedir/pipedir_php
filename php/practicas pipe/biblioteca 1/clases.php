<?php

class Libro {

    public $autor;
    protected $titulo;
    private $disponible = true;

    public function __construct($titulo, $autor){
        $this->autor = $autor;
        $this->titulo = $titulo;
    }

    public function prestar(){
        if($this->disponible){
            $this->disponible = false;
            echo "El libro '$this->titulo' ha sido prestado! ";
        } else {
            echo "El libro '$this->titulo' no esta disponible! ";
        }
    }

    function devolver(){
        $this->disponible = true;
        echo "El libro '$this->titulo' ha sido devuelto a la biblioteca! ";
    }

    public function disponible(){
       return $this->disponible;
    }
}


class Persona {

    public $nombre;

    public function __construct($nombre){
        $this->nombre = $nombre;
}

    public function prestarLibro($libro){
        if ($libro->disponible()) {
            $libro->prestar();
            echo "$this->nombre ha peido el libro '$libro->titulo'";
        } else {

            echo "'$this->nombre' no puede pedir prestado el libro '$libro->titulo'";
        }
}

    public function devolverLibro($libro){
        $libro -> devolver();
        echo "'$this->nombre' ha devuelto el libro '$libro->titulo' !";
    }



    
}


class Biblioteca{
    private $users = [];
    private $libros = [];    

    public function agregarLibro($libro){
        $this->libros = $libro;
}
    public function agregarUsuario($usuario){
        $this->users = $usuario;
    }

    public function muestraLibros(){
        foreach ($this->libros as $libro ) {
            $estado = $libro->disponible() ? "Disponible" : "No disponible";
            echo "Titulo> '$libro->titulo', Autor> '$libro->autor', 
            Estado> '$estado' \n";
        }
    }

}




?>