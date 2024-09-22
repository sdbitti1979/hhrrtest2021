<?php

class NodoDestinos
{


    public $nombre;
    public $hijos;

    public function __construct($nombre, $hijos)
    {
        $this->nombre = $nombre;
        $this->hijos = $hijos;
    }

    public function agregarHijo(NodoDestinos $hijo)
    {
        $this->hijos[] = $hijo;
    }

    // Método estático para construir la estructura de nodos desde un array
    public static function desdeArray(array $estructura): self
    {
        
        
        // Verificar si el array tiene la clave 'nombre'
        if (!isset($estructura['nombre'])) {
            throw new InvalidArgumentException("El array proporcionado no tiene la clave 'nombre'.");
        }

        $nombre = $estructura['nombre'];
        $hijos = [];

        // Si hay hijos, construimos la estructura recursivamente
        if (isset($estructura['hijos']) && is_array($estructura['hijos'])) {
            foreach ($estructura['hijos'] as $hijo) {
                $hijos[] = self::desdeArray($hijo); // Llamada recursiva para cada hijo
            }
        }

        return new self($nombre, $hijos);
    }
}
