<?php

namespace Padelea;

class Jugador
{
    private $idjugador;
    private $email;
    private $passwordC;
    private $nombre;
    private $apodo;
    private $nivel;

    public function __construct($idjugador = "", $email = "", $passwordC = "", $nombre = "", $apodo = "", $nivel = "")
    {
        $this->idjugador = $idjugador;
        $this->email = $email;
        $this->passwordC = $passwordC;
        $this->nombre = $nombre;
        $this->apodo = $apodo;
        $this->nivel = $nivel;
    }

    public function getId()
    {

    }

}

?>