<?php


/**
 * Clase Paquete
 *
 * @author sbitti
 */
class Paquete {
    
    private float $peso;    
    private float $largo;
    private float $ancho;
    private float $alto;
    
    public function __construct(float $peso, float $largo, float $ancho,
            float $alto) {
        $this->peso = $peso;
        $this->largo = $largo;
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    
    public function getPeso(): float {
        return $this->peso;
    }

    public function getLargo(): float {
        return $this->largo;
    }

    public function getAncho(): float {
        return $this->ancho;
    }

    public function getAlto(): float {
        return $this->alto;
    }

    public function setPeso(float $peso): void {
        $this->peso = $peso;
    }

    public function setLargo(float $largo): void {
        $this->largo = $largo;
    }

    public function setAncho(float $ancho): void {
        $this->ancho = $ancho;
    }

    public function setAlto(float $alto): void {
        $this->alto = $alto;
    }

    public function calcularVolumen(){
        return $this->getLargo() * $this->getAncho() * $this->getAlto();
    }
}
