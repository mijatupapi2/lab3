<?php

class Autor {
    private $nombre;
    private $apellido;
    private $edad;
    
    public function __construct($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }
    
    // Getters
    public function getNombre() {
        return $this->nombre;
    }
    
    public function getApellido() {
        return $this->apellido;
    }
    
    public function getEdad() {
        return $this->edad;
    }
    
    // Setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    
    public function setEdad($edad) {
        $this->edad = $edad;
    }
    
    public function getNombreCompleto() {
        return $this->nombre . " " . $this->apellido;
    }
}