<?php

class ReservationModel
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

    var $idClient;
    var $idVol;
    var $numeroReservaton;
    var $nombreAdulte;
    var $nombreEnfant;
    var $nombreBebe;
    var $class;

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     * @return mixed
     */
    public function getIdVol()
    {
        return $this->idVol;
    }

    /**
     * @param mixed $idVol
     */
    public function setIdVol($idVol)
    {
        $this->idVol = $idVol;
    }

    /**
     * @return mixed
     */
    public function getNumeroReservaton()
    {
        return $this->numeroReservaton;
    }

    /**
     * @param mixed $numeroReservaton
     */
    public function setNumeroReservaton($numeroReservaton)
    {
        $this->numeroReservaton = $numeroReservaton;
    }

    /**
     * @return mixed
     */
    public function getNombreAdulte()
    {
        return $this->nombreAdulte;
    }

    /**
     * @param mixed $nombreAdulte
     */
    public function setNombreAdulte($nombreAdulte)
    {
        $this->nombreAdulte = $nombreAdulte;
    }

    /**
     * @return mixed
     */
    public function getNombreEnfant()
    {
        return $this->nombreEnfant;
    }

    /**
     * @param mixed $nombreEnfant
     */
    public function setNombreEnfant($nombreEnfant)
    {
        $this->nombreEnfant = $nombreEnfant;
    }

    /**
     * @return mixed
     */
    public function getNombreBebe()
    {
        return $this->nombreBebe;
    }

    /**
     * @param mixed $nombreBebe
     */
    public function setNombreBebe($nombreBebe)
    {
        $this->nombreBebe = $nombreBebe;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }


}