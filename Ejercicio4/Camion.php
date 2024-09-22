<?php

/**
 * Description of Camion
 * Clase Camión
 * @author sbitti
 */
class Camion {

    private ModeloCamion $modelo;
    private string $patente;
    private float $tara;
    private float $pesoNeto;
    private float $pesoBruto;
    private float $capacidadDeCarga;
    private HojaDeRuta $hdr;

    public function __construct(ModeloCamion $modelo, string $patente,
            float $tara, float $pesoNeto, float $pesoBruto,
            float $capacidadDeCarga) {
        $this->modelo = $modelo;
        $this->patente = $patente;
        $this->tara = $tara;
        $this->pesoNeto = $pesoNeto;
        $this->pesoBruto = $pesoBruto;
        $this->capacidadDeCarga = $capacidadDeCarga;
        $this->hdr = null;
    }

    public function getModelo(): ModeloCamion {
        return $this->modelo;
    }

    public function getPatente(): string {
        return $this->patente;
    }

    public function getTara(): float {
        return $this->tara;
    }

    public function getPesoNeto(): float {
        return $this->pesoNeto;
    }

    public function getPesoBruto(): float {
        return $this->pesoBruto;
    }

    public function getCapacidadDeCarga(): float {
        return $this->capacidadDeCarga;
    }

    public function getHdr(): HojaDeRuta {
        return $this->hdr;
    }

    public function setModelo(ModeloCamion $modelo): void {
        $this->modelo = $modelo;
    }

    public function setPatente(string $patente): void {
        $this->patente = $patente;
    }

    public function setTara(float $tara): void {
        $this->tara = $tara;
    }

    public function setPesoNeto(float $pesoBruto, float $tara): void {
        $this->pesoNeto = $pesoBruto - $tara;
    }

    public function setPesoBruto(float $pesoBruto): void {
        $this->pesoBruto = $pesoBruto;
    }

    public function setCapacidadDeCarga(float $capacidadDeCarga): void {
        $this->capacidadDeCarga = $capacidadDeCarga;
    }

    public function setHdr(HojaDeRuta $hdr): void {

        if ($this->hdr !== null) {
            throw new Exception("El camión ya tiene una hoja de ruta asignada.");
        }

        // Validar que la hoja de ruta no exceda las capacidades del camión
        $pesoTotal = $hdr->calcularPesoTotal();
        $volumenTotal = $hdr->calcularVolumenTotal();

        if ($pesoTotal > $this->getModelo()->getPesoMaximo() || $volumenTotal > $this->getModelo()->getVolumen()) {
            throw new ExcesoDeCapacidadException("La hoja de ruta excede la capacidad del camión.");
        }

        $this->hdr = $hojaDeRuta;
    }
}
