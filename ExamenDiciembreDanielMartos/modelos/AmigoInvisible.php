<?php

namespace AmigoInvisible\modelos;

class AmigoInvisible
{
    private $id;
    private $nombre;
    private $estado;
    private $maximo_dinero;
    private $fecha_tope;
    private $lugar;
    private $observaciones;
    private $emoji;
    private $participantes;

    public function __construct($id = "", $nombre = "", $estado = "", $maximo_dinero = "", $fecha_tope = "", $lugar = "", $observaciones = "", $emoji = "", $participantes = "")
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->estado = $estado;
        $this->maximo_dinero = $maximo_dinero;
        $this->fecha_tope = $fecha_tope;
        $this->lugar = $lugar;
        $this->observaciones = $observaciones;
        $this->emoji = $emoji;
        $this->participantes = $participantes;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return self
     */

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return self
     */

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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
    public function getMaximo_dinero()
    {
        return $this->maximo_dinero;
    }

    /**
     * @return self
     */

    public function setMaximo_dinero($maximo_dinero)
    {
        $this->maximo_dinero = $maximo_dinero;
        return $this;
    }
    public function getFecha_tope()
    {
        return $this->fecha_tope;
    }

    /**
     * @return self
     */

    public function setFecha_tope($fecha_tope)
    {
        $this->fecha_tope = $fecha_tope;
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
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * @return self
     */

    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
        return $this;
    }
    public function getEmoji()
    {
        return $this->emoji;
    }

    /**
     * @return self
     */

    public function setEmoji($emoji)
    {
        $this->emoji = $emoji;
        return $this;
    }
    public function getParticipantes()
    {
        return $this->participantes;
    }

    /**
     * @return self
     */

    public function setParticipantes($participantes)
    {
        $this->participantes = $participantes;
        return $this;
    }



}

?>