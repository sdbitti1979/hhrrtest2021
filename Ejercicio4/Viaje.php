<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Viaje
 *
 * @author sbitti
 */
class Viaje extends Elemento {

    private array $paquetes = [];

    public function __construct(string $nombre, array $paquetes) {
        parent::__construct($nombre);
        foreach ($paquetes as $paquete) {
            if (!$paquete instanceof Paquete) {
                throw new InvalidArgumentException("Todos los elementos deben ser instancias de la clase Paquete.");
            }
        }
        $this->paquetes = $paquetes;
    }

    public function getOrigen(): Origen {
        return $this->origen;
    }

    public function getDestino(): Destino {
        return $this->destino;
    }

    public function getPaquetes(): array {
        return $this->paquetes;
    }

    public function setOrigen(Origen $origen): void {
        $this->origen = $origen;
    }

    public function setDestino(Destino $destino): void {
        $this->destino = $destino;
    }

    public function setPaquetes(Paquete $paquete): void {
        $this->paquetes[] = $paquete;
    }

    #[\Override]
    public function mostrarInformacion() {
        echo "Viaje: {$this->getNombre()} - Origen: {$this->getOrigen()}, Destino: {$this->getDestino()}\n";
    }

    #[\Override]
    public function calcularCosto() {
        
        $costoTotal = 0;
        foreach ($this->getPaquetes() as $key => $paquete) {
            $costoTotal += $paquete->calcularCosto();
        }

        return $costoTotal; 
    }

    #[\Override]
    public function calcularPesoTotal() {
        $pesoTotal = 0;
        foreach ($this->getPaquetes() as $key => $paquete) {
            $pesoTotal += $paquete->getPeso();
        }
        return $pesoTotal;
    }

    #[\Override]
    public function calcularVolumenTotal() {
        $volumenTotal = 0;
        foreach ($this->getPaquetes() as $key => $paquete) {
            $volumenTotal += $paquete->calcularVolumen();
        }
        return $volumenTotal;
    }

    #[\Override]
    public function getDistanceBetweenPoints(float $latitude1, 
            float $longitude1, float $latitude2, float $longitude2): float {
        $theta = $longitude1 - $longitude2;
        $distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) 
                + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) 
                * cos(deg2rad($theta)));
        $distance = acos($distance);
        $distance = rad2deg($distance);
        $distance = $distance * 60 * 1.1515;
        $distance = $distance * 1.609344;
        return (round($distance, 2));
    }
}
