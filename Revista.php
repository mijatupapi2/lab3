<?php
require_once 'IPublicable.php';
require_once 'Autor.php';

class Revista implements IPublicable {
    public $titulo;
    public $autor;
    public $anioPublicacion;
    public $numero;
    
    public function __construct($titulo, $autor, $anioPublicacion, $numero) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anioPublicacion = $anioPublicacion;
        $this->numero = $numero;
    }
    
    public function getInfo() {
        return "Revista: " . $this->titulo . 
            ", Número: " . $this->numero . 
            ", Autor: " . $this->autor->getNombreCompleto() . 
            ", Año: " . $this->anioPublicacion;
    }
}