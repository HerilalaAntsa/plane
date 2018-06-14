<?php

class FactureModel
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
    var $Caisse;
    var $dateHeure;
    var $prixTotal;
    var $detailFacture = array();

    /**
     * @return mixed
     */
    public function getCaisse()
    {
        return $this->Caisse;
    }

    /**
     * @param mixed $Caisse
     */
    public function setCaisse($Caisse)
    {
        $this->Caisse = $Caisse;
    }

    /**
     * @return mixed
     */
    public function getDateHeure()
    {
        return $this->dateHeure;
    }

    /**
     * @param mixed $dateHeure
     */
    public function setDateHeure($dateHeure)
    {
        $this->dateHeure = $dateHeure;
    }

    /**
     * @return mixed
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }

    /**
     * @param mixed $prixTotal
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;
    }


    /**
     * @return array
     */
    public function getDetailFacture()
    {
        return $this->detailFacture;
    }

    /**
     * @param array $detailFacture
     */
    public function setDetailFacture($detailFacture)
    {
        $this->detailFacture = $detailFacture;
    }

    public function addDetail($detail){
        array_push($this->detailFacture, $detail);
    }
}