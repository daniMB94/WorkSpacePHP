<?php

namespace Padelea;

class Partida
{
    private $idPartida;
    private $fecha;
    private $hora;
    private $ciudad;
    private $lugar;
    private $cubierto;
    private $estado;
    private $idj1;
    private $idj2;
    private $idj3;
    private $idj4;

    public function _construct($idPartida = "", $fecha = "", $hora = "", $ciudad = "", $lugar = "", $cubierto = "", $estado = "", $idj1 = "", $idj2 = "", $idj3 = "", $idj4 = "")
    {

        $this->idPartida = $idPartida;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->ciudad = $ciudad;
        $this->lugar = $lugar;
        $this->cubierto = $cubierto;
        $this->estado = $estado;
        $this->idj1 = $idj1;
        $this->idj2 = $idj2;
        $this->idj3 = $idj3;
        $this->idj4 = $idj4;

    }

    public function getIdPartida()
    {
        return $this->idPartida;
    }

    /**
     * @return self
     */

    public function setIdPartida($idPartida)
    {
        $this->idPartida = $idPartida;
        return $this;
    }
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @return self
     */

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
        return $this;
    }

    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @return self
     */

    public function setHora($hora)
    {
        $this->hora = $hora;
        return $this;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * @return self
     */

    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
        return $this;
    }
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * @return self
     */

    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
        return $this;
    }

    public function getCubierto()
    {
        return $this->cubierto;
    }

    /**
     * @return self
     */

    public function setCubierto($cubierto)
    {
        $this->cubierto = $cubierto;
        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @return self
     */

    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }
    public function getIdj1()
    {
        return $this->idj1;
    }

    /**
     * @return self
     */

    public function setIdj1($idj1)
    {
        $this->idj1 = $idj1;
        return $this;
    }
    public function getIdj2()
    {
        return $this->idj2;
    }

    /**
     * @return self
     */

    public function setIdj2($idj2)
    {
        $this->idj2 = $idj2;
        return $this;
    }
    public function getIdj3()
    {
        return $this->idj3;
    }

    /**
     * @return self
     */

    public function setIdj3($idj3)
    {
        $this->idj3 = $idj3;
        return $this;
    }
    public function getIdj4()
    {
        return $this->idj4;
    }

    /**
     * @return self
     */

    public function setIdj4($idj4)
    {
        $this->idj4 = $idj4;
        return $this;
    }
}

?>