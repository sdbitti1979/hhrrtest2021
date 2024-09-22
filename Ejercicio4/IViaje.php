<?php

/**
 * Interface IViaje
 * @author sbitti
 */
interface IViaje {
    
    public function calcularCosto();
    public function calcularVolumenTotal();
    public function calcularPesoTotal();
    public function getDistanceBetweenPoints(float $latitude1, float $longitude1, 
            float $latitude2, float $longitude2): float;
}
