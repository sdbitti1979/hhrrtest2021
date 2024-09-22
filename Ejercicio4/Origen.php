<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Origen
 *
 * @author sbitti
 */
class Origen implements ILugar{
    
    private string $direccion;
    private float $latitud;
    private float $longitud;
    
    public function __construct(string $direccion, float $latitud, float $longitud) {
        $this->direccion = $direccion;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
    }

    #[\Override]
    public function getDireccion(): string {
        return $this->direccion;
    }

    #[\Override]
    public function getLatitud(): float {
        return $this->latitud;
    }

    #[\Override]
    public function getLongitud(): float {
        return $this->longitud;
    }

    #[\Override]
    public function setDireccion(string $direccion): void {
        $this->direccion = $direccion;
    }

    #[\Override]
    public function setLatitud(float $latitud): void {
        $this->latitud = $latitud;
    }

    #[\Override]
    public function setLongitud(float $longitud): void {
        $this->longitud = $longitud;
    }


}
