<?php

namespace AmigoInvisible\modelos;

class AmigosInvisiblesYParticipantes
{
    private $id;
    private $idAmigosInvisibles;
    private $idParticipantes;
    private $estado;

    public function __construct($id = "", $idAmigosInvisibles = "", $idParticipantes = "", $estado = "")
    {
        $this->id = $id;
        $this->idAmigosInvisibles = $idAmigosInvisibles;
        $this->idParticipantes = $idParticipantes;
        $this->estado = $estado;
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
    public function getIdAmigosInvisibles()
    {
        return $this->idAmigosInvisibles;
    }

    /**
     * @return self
     */

    public function setIdAmigosInvisibles($idAmigosInvisibles)
    {
        $this->idAmigosInvisibles = $idAmigosInvisibles;
        return $this;
    }

    public function getIdParticipantes()
    {
        return $this->idParticipantes;
    }

    /**
     * @return self
     */

    public function setIdParticipantes($idParticipantes)
    {
        $this->idParticipantes = $idParticipantes;
        return $this;
    }
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @return self
     */

    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }
}

?>