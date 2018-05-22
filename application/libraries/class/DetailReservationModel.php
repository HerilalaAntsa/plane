<?php

class DetailReservationModel
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
    var $idreservation;
    var $nomPassager;

    /**
     * @return mixed
     */
    public function getIdreservation()
    {
        return $this->idreservation;
    }

    /**
     * @param mixed $idreservation
     */
    public function setIdreservation($idreservation)
    {
        $this->idreservation = $idreservation;
    }
    var $prenomPassager;

    var $datenaissance;


}