<?php

namespace regalosNavidad\modelos;

class RegaloNavidad
{

    private $id;
    private $usuario;
    private $categoria;
    private $nombre_articulo;
    private $quien_recibe;

    public function __construct($id = "", $usuario = "", $categoria = "", $nombre_articulo = "", $quien_recibe = "")
    {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->categoria = $categoria;
        $this->nombre_articulo = $nombre_articulo;
        $this->quien_recibe = $quien_recibe;
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

    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @return self
     */

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @return self
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
        return $this;
    }

    public function getNombre_articulo()
    {
        return $this->nombre_articulo;
    }

    /**
     * @return self
     */
    public function setNombre_articulo($nombre_articulo)
    {
        $this->nombre_articulo = $nombre_articulo;
        return $this;
    }

    public function getQuien_recibe()
    {
        return $this->quien_recibe;
    }
    /**
     * @return self
     */
    public function setQuien_recibe($quien_recibe)
    {
        $this->quien_recibe = $quien_recibe;
        return $this;
    }
}
