<?php

namespace regalosNavidad\modelos;

class Usuario{
    private $id;
    private $nombre;
    private $nickname;
    private $passwordC;

    public function __construct($id = "", $nombre = "", $nickname = "", $passwordC = "") {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->nickname = $nickname;
        $this->passwordC = $passwordC;
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
    public function getNickname(){
        return $this->nickname;
    }
    /**
     * @return self
     */
    public function setNickname($nickname){
        $this->nickname = $nickname;
        return $this;
    }
    public function getpasswordC(){
        return $this->passwordC;
    }
    /**
     * @return self
     */
    public function setPasswordC($passwordC){
        $this->passwordC = $passwordC;
        return $this;
    }
}
