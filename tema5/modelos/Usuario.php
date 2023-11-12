<?php

namespace regalosNavidad\modelos;

class Usuario{
    private $id;
    private $nombre;
    private $nickname;
    private $password;

    public function __construct($id = "", $nombre = "", $nickname = "", $password = "") {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->nickname = $nickname;
        $this->password = $password;
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

    public function getNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return self
     */
    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }
    public function getNickname($nickname){
        return $this->nickname;
    }
    /**
     * @return self
     */
    public function setNickname($nickname){
        $this->nickname = $nickname;
        return $this;
    }
    public function getpassword(){
        return $this->password;
    }
    /**
     * @return self
     */
    public function setPassword($password){
        $this->password = $password;
        return $this;
    }
}

?>