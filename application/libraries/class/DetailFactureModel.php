<?php

class DetailFactureModel
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
    var $Facture;
    var $Produit;
    var $quantite;

    /**
     * @return mixed
     */
    public function getFacture()
    {
        return $this->Facture;
    }

    /**
     * @param mixed $Facture
     */
    public function setFacture($Facture)
    {
        $this->Facture = $Facture;
    }

    /**
     * @return mixed
     */
    public function getProduit()
    {
        return $this->Produit;
    }

    /**
     * @param mixed $Produit
     */
    public function setProduit($Produit)
    {
        $this->Produit = $Produit;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

}