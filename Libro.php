<?php
require_once 'Autor.php';
require_once 'IPublicable.php';

class Libro implements IPublicable {
    public $titulo;
    public $autor;
    public $anioPublicacion;
    
    public function __construct($titulo, $autor, $anioPublicacion) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anioPublicacion = $anioPublicacion;
    }
    
    public function getInfo() {
        return "Libro: " . $this->titulo . 
               ", Autor: " . $this->autor->getNombreCompleto() . 
               ", Año: " . $this->anioPublicacion;
    }
}