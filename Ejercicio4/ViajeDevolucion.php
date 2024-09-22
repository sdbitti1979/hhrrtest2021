<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of ViajeDevolucion
 *
 * @author sbitti
 */
class ViajeDevolucion extends Viaje {
    
    /**
     * Método por el cuál se calcula el costo por Viaje de devolución
     * @return retorna un valor constante de $1000
     */
    #[\Override]
    public function calcularCosto() {
        return 1000;
    }
}
