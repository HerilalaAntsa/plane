<?php
class EtatPack
{
    var $appel;
    var $vente;
    var $quantite;
    var $etatMere;
    var $pourcentage;

    public function getPack()
    {
        return $this->pack;
    }
    public function setPack($pack)
    {
        $this->pack = $pack;
    }
    public function getVente()
    {
        return $this->vente;
    }
    public function setVente($vente)
    {
        $this->vente = $vente;
    }
    public function getQuantite()
    {
        return $this->quantite;
    }
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
        $this->setVente($quantite * $this->pack->getPrix());
    }
    public function getEtatMere()
    {
        return $this->etatMere;
    }
    public function setEtatMere($etatMere)
    {
        $this->etatMere = $etatMere;
    }


    public function getPourcentage()
    {
        return $this->pourcentage;
    }
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;
    }



}