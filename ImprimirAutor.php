<?php

require_once 'Autor.php';

class ImprimirAutor {
    public function getInfo(Autor $autor) {
        return "Autor: " . $autor->getNombreCompleto() .
            ", Edad: " . $autor->getEdad();
    }
}