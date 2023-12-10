<?php

namespace Padelea\modelos;

class Jugador
{
    private $idJugador;
    private $email;
    private $passwordC;
    private $nombre;
    private $apodo;
    private $nivel;

    public function __construct($idJugador = "", $email = "", $passwordC = "", $nombre = "", $apodo = "", $nivel = "")
    {
        $this->idJugador = $idJugador;
        $this->email = $email;
        $this->passwordC = $passwordC;
        $this->nombre = $nombre;
        $this->apodo = $apodo;
        $this->nivel = $nivel;
    }

    public function getIdJugador()
    {
        return $this->idJugador;
    }

    /**
     * @return self
     */

    public function setIdJugador($idJugador)
    {
        $this->idJugador = $idJugador;
        return $this;
    }
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return self
     */

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getPasswordC()
    {
        return $this->passwordC;
    }

    /**
     * @return self
     */

    public function setPasswordC($passwordC)
    {
        $this->passwordC = $passwordC;
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
    public function getApodo()
    {
        return $this->apodo;
    }

    /**
     * @return self
     */

    public function setApodo($apodo)
    {
        $this->apodo = $apodo;
        return $this;
    }
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * @return self
     */

    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
        return $this;
    }
}

?>