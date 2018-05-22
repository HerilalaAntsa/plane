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

    public function getIdClient()
    {
        return $this->idClient;
    }
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }
    public function getIdVol()
    {
        return $this->idVol;
    }
    public function setIdVol($idVol)
    {
        $this->idVol = $idVol;
    }
    public function getNumeroReservaton()
    {
        return $this->numeroReservaton;
    }
    public function setNumeroReservaton($numeroReservaton)
    {
        $this->numeroReservaton = $numeroReservaton;
    }
    public function getNombreAdulte()
    {
        return $this->nombreAdulte;
    }
    public function setNombreAdulte($nombreAdulte)
    {
        $this->nombreAdulte = $nombreAdulte;
    }
    public function getNombreEnfant()
    {
        return $this->nombreEnfant;
    }
    public function setNombreEnfant($nombreEnfant)
    {
        $this->nombreEnfant = $nombreEnfant;
    }
    public function getNombreBebe()
    {
        return $this->nombreBebe;
    }
    public function setNombreBebe($nombreBebe)
    {
        $this->nombreBebe = $nombreBebe;
    }
    public function getClass()
    {
        return $this->class;
    }
    public function setClass($class)
    {
        $this->class = $class;
    }


}