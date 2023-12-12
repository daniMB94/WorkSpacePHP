<?php

namespace AmigoInvisible\modelos;

class Participante
{
    private $id;
    private $email;
    private $nombre;
    private $telefono;

    public function __construct($id = "", $email = "", $nombre = "", $telefono = "")
    {
        $this->id = $id;
        $this->email = $email;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
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

    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @return self
     */

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
        return $this;
    }

}

?>