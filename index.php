<?php
require_once 'Autor.php';
require_once 'Libro.php';
require_once 'Revista.php';
require_once 'ImprimirAutor.php';

// Crear autores
$autorElenaWhite = new Autor("Elena", "White", 70);
$autor2 = new Autor("Juan", "Pérez", 45);
$autor3 = new Autor("María", "González", 38);
$autor4 = new Autor("Carlos", "López", 52);

// Crear libros y revistas
$libro1 = new Libro("El Camino a Cristo", $autorElenaWhite, 1892);
$libro2 = new Libro("PHP para Principiantes", $autor2, 2023);
$revista1 = new Revista("National Geographic", $autor3, 2023, 256);
$revista2 = new Revista("Time", $autor4, 2023, 42);

// Agregar a un array
$publicaciones = [$libro1, $libro2, $revista1, $revista2];

// Iterar e imprimir
foreach ($publicaciones as $publicacion) {
    echo $publicacion->getInfo() . "\n";
}

// Ejemplo de ImprimirAutor
$imprimirAutor = new ImprimirAutor();
echo "\n" . $imprimirAutor->getInfo($autorElenaWhite) . "\n";