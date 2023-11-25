<?php

namespace regalosNavidad\modelos;

class Enlace
{

    private $id;
    private $idRegalo;
    private $url;
    private $precio;

    public function __construct($id = "", $idRegalo = "", $url = "", $precio = "")
    {
        $this->id = $id;
        $this->idRegalo = $idRegalo;
        $this->url = $url;
        $this->precio = $precio;
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
    public function getIdRegalo()
    {
        return $this->idRegalo;
    }
    /**
     * @return self
     */
    public function setIdRegalo($idRegalo)
    {
        $this->idRegalo = $idRegalo;
        return $this;
    }
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
    /**
     * @return self
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
        return $this;
    }
}
