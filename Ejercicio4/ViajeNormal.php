<?php

/**
 * Description of ViajeNormal
 *
 * @author sbitti
 */
class ViajeNormal extends Viaje{
    
    #[\Override]
    public function calcularCosto() {        
        $origen = $this->getOrigen();
        $destino = $this->getDestino();
        $total = 0;        
        $total += $this->calcularPesoTotal() * 2 * 
                $this->getDistanceBetweenPoints($origen->getLatitud(), $origen->getLongitud(),
                        $destino->getLatitud(), $destino->getLongitud());        
        return $total;
    }
}
