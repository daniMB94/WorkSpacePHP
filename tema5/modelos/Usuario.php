<?php

namespace RegalosNavidad\modelos;

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
}

?>