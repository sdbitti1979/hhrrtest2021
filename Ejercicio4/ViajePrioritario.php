<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of ViajePrioritario
 *
 * @author sbitti
 */
class ViajePrioritario extends Viaje{
    
    
    /**
     * Método que calcula el costo del viaje prioritario
     * @return máximo entre el total por volumen y el total por peso
     */
     #[\Override]
     public function calcularCosto() {
        
        $totalPorPeso = 0;
        $totalPorVolumen = 0;
        $origen = $this->getOrigen();
        $destino = $this->getDestino();
        
        $totalPorPeso += $this->calcularPesoTotal() * 2 
                * $this->getDistanceBetweenPoints($origen->getLatitud(), $origen->getLongitud(),
                        $destino->getLatitud(), $destino->getLongitud());
        
        $totalPorVolumen += $this->calcularVolumenTotal() * 10 
                * $this->getDistanceBetweenPoints($origen->getLatitud(), $origen->getLongitud(),
                        $destino->getLatitud(), $destino->getLongitud());
        
        return max($totalPorVolumen, $totalPorPeso);
    }
}
