<?php

/**
 * Clase abstracta Elemento
 *
 * @author sbitti
 */
abstract class Elemento implements IViaje{
    
    /**
     * Hacemos la propiedad completametne inmutable.
     * @var string
     */
    protected readonly string $nombre;
    
    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    } 
 
  
    // Métodos abstractos que deben ser implementados por las subclases.
    abstract public function mostrarInformacion(): void;
    abstract public function calcularCosto(): float;
    abstract public function calcularPesoTotal(): float;
    abstract public function calcularVolumenTotal(): float;
}
