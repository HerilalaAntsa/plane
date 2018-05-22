<?php

class DetailReservation
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
    var $nomPassager;
    var $prenomPassager;
    var $datenaissance;

    public function getNomPassager()
    {
        return $this->nomPassager;
    }
    public function setNomPassager($nom)
    {
        $this->nom = nomPassager;
    }

    public function getPrenomPassager()
    {
        return $this->prenomPassager;
    }
    public function setPrenomPassager($prenom)
    {
        $this->prenom = prenomPassager;
    }

    public function getDatenaissance()
    {
        return $this->datenaissance;
    }
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;
        $this->setAge($datenaissance);
    }

    public function setAge($date)
    {
        $age = date('Y') - date('Y', strtotime($date));
        if (date('md') < date('md', strtotime($date))){
            $age = $age - 1;
        }
        $this->age = $age;
    }

}