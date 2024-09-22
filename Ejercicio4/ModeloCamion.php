<?php

/**
 * Clase ModeloCamion
 * 
 * @author sbitti
 */
class ModeloCamion {
    
    private $volumen;
    private $pesoMaximo;
    
    public function __construct($volumen, $pesoMaximo) {
        $this->volumen = $volumen;
        $this->pesoMaximo = $pesoMaximo;
    }
    
    public function getVolumen() {
        return $this->volumen;
    }

    public function getPesoMaximo() {
        return $this->pesoMaximo;
    }

    public function setVolumen($volumen): void {
        $this->volumen = $volumen;
    }

    public function setPesoMaximo($pesoMaximo): void {
        $this->pesoMaximo = $pesoMaximo;
    }



}
