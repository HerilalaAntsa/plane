<?php

class Avion
{
    var $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    var $nomAvion;
    var $consommationAvion;
    var $nombrePassagerAvion;

    /**
     * @return mixed
     */
    public function getNomAvion()
    {
        return $this->nomAvion;
    }

    /**
     * @param mixed $nomAvion
     */
    public function setNomAvion($nomAvion)
    {
        $this->nomAvion = $nomAvion;
    }

    /**
     * @return mixed
     */
    public function getConsommationAvion()
    {
        return $this->consommationAvion;
    }

    /**
     * @param mixed $consommationAvion
     */
    public function setConsommationAvion($consommationAvion)
    {
        $this->consommationAvion = $consommationAvion;
    }

    /**
     * @return mixed
     */
    public function getNombrePassagerAvion()
    {
        return $this->nombrePassagerAvion;
    }

    /**
     * @param mixed $nombrePassagerAvion
     */
    public function setNombrePassagerAvion($nombrePassagerAvion)
    {
        $this->nombrePassagerAvion = $nombrePassagerAvion;
    }


}