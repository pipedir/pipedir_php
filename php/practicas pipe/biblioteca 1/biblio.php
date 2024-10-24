<?php

include("clases.php");


$libro1 = new Libro("Gatos negros","Edgar Allan Poe");
$libro2 =  new Libro("Cien anos de soledad","Gabriel Garcia Marquez");
$usuario1 = new Persona("Isabella");
$usuario2 = new Persona("Pipe");
$biblioteca = new Biblioteca();
$biblioteca->agregarLibro($libro1);
$biblioteca->agregarLibro($libro2);
$biblioteca->agregarUsuario($usuario1);
$biblioteca->agregarUsuario($usuario2);





?>