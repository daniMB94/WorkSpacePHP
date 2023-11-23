<?php

namespace incidencias\Modelo;

class Cliente{
    private $id;
    private $dni;
    private $nombre;
    private $direccion;
    private $localidad;
    private $movil;

    public function __construct($id = "", $dni = "", $nombre = "", $direccion = "", $localidad = "", $movil = "") {
        $this-> id = $id;
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->localidad = $localidad;
        $this->movil = $movil;
    }
    public function getId(){
        return $this->id;
    }
    /**
     * @return self
     */
    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getDni(){
        return $this->dni;
    }
    /**
     * @return self
     */
    public function setDni($dni){
        $this->dni = $dni;
        return $this;
    }

    public function getNombre(){
        return $this->nombre;

    }

    /**
     * @return self
     */
    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    /**
     * @return self
     */
    public function setDireccion($direccion){
        $this->direccion = $direccion;
        return $this;
    }
    public function getLocalidad(){
        return $this->localidad;
    }
    /**
     * @return self
     */
    public function setLocalidad($localidad){
        $this->localidad = $localidad;
        return $this;
    }

    public function getmovil(){
        return $this->movil;
    }
    /**
     * @return self
     */
    public function setMovil($movil){
        $this->movil = $movil;
        return $this;
    }
}
