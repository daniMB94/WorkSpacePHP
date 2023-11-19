<?php

namespace regalosNavidad\modelos;

class RegaloNavidad
{

    private $id;
    private $idUsuario;
    private $categoria;
    private $nombre_articulo;
    private $quien_recibe;
    private $anio;

    public function __construct($id = "", $idUsuario = "", $categoria = "", $nombre_articulo = "", $quien_recibe = "", $anio = "")
    {
        $this->id = $id;
        $this->idUsuario = $idUsuario;
        $this->categoria = $categoria;
        $this->nombre_articulo = $nombre_articulo;
        $this->quien_recibe = $quien_recibe;
        $this->anio = $anio;
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

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @return self
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
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

    public function getAnio()
    {
        return $this->anio;
    }

    public function setAnio($anio)
    {
        $this->anio = $anio;
        return $this;
    }
}
