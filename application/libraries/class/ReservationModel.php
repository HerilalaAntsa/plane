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
    var $idVolRetour;
    var $numeroReservation;
    var $numeroReservationRetour;
    var $nombreAdulte;
    var $nombreEnfant;
    var $nombreBebe;
    var $class;
    var $detailreservation = array();

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
    public function getIdVolRetour()
    {
        return $this->idVolRetour;
    }
    public function setIdVolRetour($idVolRetour)
    {
        $this->idVolRetour = $idVolRetour;
    }
    public function getNumeroReservation()
    {
        return $this->numeroReservation;
    }
    public function setNumeroReservation($numeroReservation)
    {
        $this->numeroReservation = $numeroReservation;
    }
    public function getNumeroReservationRetour()
    {
        return $this->numeroReservationRetour;
    }
    public function setNumeroReservationRetour($numeroReservationRetour)
    {
        $this->numeroReservationRetour = $numeroReservationRetour;
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
    public function addDetail($detail){
        array_push($this->detailreservation, $detail);
    }
}