<?php

class VolModel
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
    var $idAvion;
    var $villeDepart;
    var $villeArrive;
    var $dateDepart;
    var $dateArrive;
    var $distanceVol;
    var $tarifEnfant;
    var $tarifAdulte;
    var $tarifBebe;
    var $tarifEnfantAffaire;
    var $tarifAdulteAffaire;
    var $tarifBebeAffaire;
    var $volRetour;

public function getVilleDepart()
{
    return $this->villeDepart;
}
public function setVilleDepart($villeDepart)
{
    $this->villeDepart = $villeDepart;
}
public function getVilleArrive()
{
    return $this->villeArrive;
}
public function setVilleArrive($villeArrive)
{
    $this->villeArrive = $villeArrive;
}
public function getDateDepart()
{
    return $this->dateDepart;
}
public function setDateDepart($dateDepart)
{
    $this->dateDepart = $dateDepart;
}
public function getDateArrive()
{
    return $this->dateArrive;
}
public function setDateArrive($dateArrive)
{
    $this->dateArrive = $dateArrive;
}
public function getDistanceVol()
{
    return $this->distanceVol;
}
public function setDistanceVol($distanceVol)
{
    $this->distanceVol = $distanceVol;
}
public function getTarifEnfant()
{
    return $this->tarifEnfant;
}
public function setTarifEnfant($tarifEnfant)
{
    $this->tarifEnfant = $tarifEnfant;
}
public function getTarifAdulte()
{
    return $this->tarifAdulte;
}
public function setTarifAdulte($tarifAdulte)
{
    $this->tarifAdulte = $tarifAdulte;
}
public function getTarifBebe()
{
    return $this->tarifBebe;
}
public function setTarifBebe($tarifBebe)
{
    $this->tarifBebe = $tarifBebe;
}
public function getTarifEnfantAffaire()
{
    return $this->tarifEnfantAffaire;
}
public function setTarifEnfantAffaire($tarifEnfantAffaire)
{
    $this->tarifEnfantAffaire = $tarifEnfantAffaire;
}
public function getTarifAdulteAffaire()
{
    return $this->tarifAdulteAffaire;
}
public function setTarifAdulteAffaire($tarifAdulteAffaire)
{
    $this->tarifAdulteAffaire = $tarifAdulteAffaire;
}
public function getTarifBebeAffaire()
{
    return $this->tarifBebeAffaire;
}
public function setTarifBebeAffaire($tarifBebeAffaire)
{
    $this->tarifBebeAffaire = $tarifBebeAffaire;
}
    public function getIdAvion()
    {
        return $this->idAvion;
    }
    public function setIdAvion($idAvion)
    {
        $this->idAvion = $idAvion;
    }
    public function getVolRetour()
    {
        return $this->volRetour;
    }
    public function setVolRetour($volRetour)
    {
        $this->volRetour = $volRetour;
    }

}