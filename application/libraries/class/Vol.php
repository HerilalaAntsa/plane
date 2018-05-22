<?php

class Vol
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


    /**
 * @return mixed
 */
public function getVilleDepart()
{
    return $this->villeDepart;
}/**
 * @param mixed $villeDepart
 */
public function setVilleDepart($villeDepart)
{
    $this->villeDepart = $villeDepart;
}/**
 * @return mixed
 */
public function getVilleArrive()
{
    return $this->villeArrive;
}/**
 * @param mixed $villeArrive
 */
public function setVilleArrive($villeArrive)
{
    $this->villeArrive = $villeArrive;
}/**
 * @return mixed
 */
public function getDateDepart()
{
    return $this->dateDepart;
}/**
 * @param mixed $dateDepart
 */
public function setDateDepart($dateDepart)
{
    $this->dateDepart = $dateDepart;
}/**
 * @return mixed
 */
public function getDateArrive()
{
    return $this->dateArrive;
}/**
 * @param mixed $dateArrive
 */
public function setDateArrive($dateArrive)
{
    $this->dateArrive = $dateArrive;
}/**
 * @return mixed
 */
public function getDistanceVol()
{
    return $this->distanceVol;
}/**
 * @param mixed $distanceVol
 */
public function setDistanceVol($distanceVol)
{
    $this->distanceVol = $distanceVol;
}/**
 * @return mixed
 */
public function getTarifEnfant()
{
    return $this->tarifEnfant;
}/**
 * @param mixed $tarifEnfant
 */
public function setTarifEnfant($tarifEnfant)
{
    $this->tarifEnfant = $tarifEnfant;
}/**
 * @return mixed
 */
public function getTarifAdulte()
{
    return $this->tarifAdulte;
}/**
 * @param mixed $tarifAdulte
 */
public function setTarifAdulte($tarifAdulte)
{
    $this->tarifAdulte = $tarifAdulte;
}/**
 * @return mixed
 */
public function getTarifBebe()
{
    return $this->tarifBebe;
}/**
 * @param mixed $tarifBebe
 */
public function setTarifBebe($tarifBebe)
{
    $this->tarifBebe = $tarifBebe;
}/**
 * @return mixed
 */
public function getTarifEnfantAffaire()
{
    return $this->tarifEnfantAffaire;
}/**
 * @param mixed $tarifEnfantAffaire
 */
public function setTarifEnfantAffaire($tarifEnfantAffaire)
{
    $this->tarifEnfantAffaire = $tarifEnfantAffaire;
}/**
 * @return mixed
 */
public function getTarifAdulteAffaire()
{
    return $this->tarifAdulteAffaire;
}/**
 * @param mixed $tarifAdulteAffaire
 */
public function setTarifAdulteAffaire($tarifAdulteAffaire)
{
    $this->tarifAdulteAffaire = $tarifAdulteAffaire;
}/**
 * @return mixed
 */
public function getTarifBebeAffaire()
{
    return $this->tarifBebeAffaire;
}/**
 * @param mixed $tarifBebeAffaire
 */
public function setTarifBebeAffaire($tarifBebeAffaire)
{
    $this->tarifBebeAffaire = $tarifBebeAffaire;
}





}