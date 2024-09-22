<?php

/**
 * Clase HojaDeRuta
 *
 * @author sbitti
 */
class HojaDeRuta extends Elemento{

    private $elementos = [];

    public function __construct(string $nombre, array $elementos) {
        parent::__construct($nombre);
        foreach ($elementos as $elemento) {
            if (!$elemento instanceof Elemento) {
                throw new InvalidArgumentException("Todos los elementos deben ser instancias de la clase Elemento.");
            }
        }
        $this->elementos = $elementos;
    }

    public function getElementos() {
        return $this->elementos;
    }

    public function setElementos(Elemento $elemento): void {
        $this->elementos[] = $elemento;
    }

    #[\Override]
    public function mostrarInformacion() {
        echo "Hoja de Ruta: {$this->nombre}\n";
        foreach ($this->getElementos() as $elemento) {
            $elemento->mostrarInformacion();
        }
    }

    #[\Override]
    public function calcularCosto() {
         $total = 0;
        foreach ($this->getElementos() as $elemento) {
            $total += $elemento->calcularCosto();
        }
        return $total;
    
    }

    #[\Override]
    public function calcularPesoTotal() {
         $pesoTotal = 0;
        foreach ($this->elementos as $elemento) {
            $pesoTotal += $elemento->calcularPesoTotal();
        }
        return $pesoTotal;
    }

    #[\Override]
    public function calcularVolumenTotal() {
         $volumenTotal = 0;
        foreach ($this->elementos as $elemento) {
            $volumenTotal += $elemento->calcularVolumenTotal();
        }
        return $volumenTotal;
    }

    #[\Override]
    public function getDistanceBetweenPoints(float $latitude1, float $longitude1, 
            float $latitude2, float $longitude2): float {          
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
