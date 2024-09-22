<?php

/**
 * Interface ILugar
 * @author sbitti
 */
interface ILugar {
    
    public function setDireccion(string $direccion);
    public function getDireccion();
    
    public function setLatitud(float $latitud);
    public function getLatitud();
    
    public function setLongitud(float $longitud);
    public function getLongitud();
    
}
