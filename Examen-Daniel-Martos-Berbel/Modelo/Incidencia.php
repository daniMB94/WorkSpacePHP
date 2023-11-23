<?php
namespace incidencias\Modelo;

class Incidencia{
    private $id;
    private $idCliente;
    private $latitud;
    private $longitud;
    private $ciudad;
    private $direccion;
    private $descripcion;
    private $solucion;
    private $estado;

    public function __construct($id = "", $idCliente = "", $latitud = "", $longitud = "", $ciudad = "", $direccion = "", $descripcion = "", $solucion = "", $estado = ""){
        $this->id = $id;
        $this->idCliente = $idCliente;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
        $this->ciudad = $ciudad;
        $this->direccion = $direccion;
        $this->descripcion = $descripcion;
        $this->solucion = $solucion;
        $this->estado = $estado;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
        return $this;
    }
    public function getIdCliente(){
        return $this->idCliente;
    }
    public function setIdCliente($idCliente){
        $this->idCliente = $idCliente;
        return $this;
    }
    public function getLatitud(){
        return $this->latitud;
    }
    public function setLatitud($latitud){
        $this->latitud = $latitud;
        return $this;
    }
    public function getLongitud(){
        return $this->longitud;
    }
    public function setLongitud($longitud){
        $this->longitud = $longitud;
        return $this;
    }
    public function getCiudad(){
        return $this->ciudad;
    }
    public function setCiudad($ciudad){
        $this->ciudad = $ciudad;
        return $this;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
        return $this;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
        return $this;
    }
    public function getSolucion(){
        return $this->solucion;
    }
    public function setSolucion($solucion){
        return $this->solucion = $solucion;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
        return $this;
    }
}       
?>