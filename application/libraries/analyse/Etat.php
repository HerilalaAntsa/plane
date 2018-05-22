<?php
class Etat
{
    var $Agent;
    var $ltAppel = array();
    var $quantiteTotale;
    var $pasinteresse;
    var $rendezvous;
    var $rappeler;

    public function getLtAppel()
    {
        return $this->ltAppel;
    }
    public function setLtAppel($ltAppel)
    {
        $this->ltAppel = $ltAppel;

        $this->autoQuantiteTotale();
        $this->autoPasinteresse();
        $this->autoRendezvous();
        $this->autoRappeler();
    }
    public function addAppel($appel){
        array_push($this->ltAppel,$appel);
    }

    public function getQuantiteTotale()
    {
        return $this->quantiteTotale;
    }
    public function setQuantiteTotale($quantiteTotale)
    {
        $this->quantiteTotale = $quantiteTotale;
    }
    public function autoQuantiteTotale()
    {
        $this->quantiteTotale = count($this->ltAppel);
    }

    public function getPasinteresse()
    {
        return $this->pasinteresse;
    }
    public function getPasinteressePourcentage()
    {
        return ($this->getPasinteresse()/$this->getQuantiteTotale())*100;
    }
    public function setPasinteresse($pasinteresse)
    {
        $this->pasinteresse = $pasinteresse;
    }
    public function autoPasinteresse()
    {
        $res = array();
        if(isset($this->ltAppel)){
            foreach ($this->ltAppel as $row){
                if($row->getAction()=='pas interesse'){
                    array_push($res,$row);
                }
            }
            $this->pasinteresse = count($res);
        }else{
            $this->pasinteresse = 0;
        }
    }

    public function getRendezvous()
    {
        return $this->rendezvous;
    }
    public function getRendezvousPourcentage()
    {
        return ($this->getRendezvous()/$this->getQuantiteTotale())*100;
    }
    public function setRendezvous($rendezvous)
    {
        $this->rendezvous = $rendezvous;
    }
    public function autoRendezvous()
    {
        $res = array();
        if(isset($this->ltAppel)){
            foreach ($this->ltAppel as $row){
                if($row->getAction()=='rendez-vous'){
                    array_push($res,$row);
                }
            }
            $this->rendezvous = count($res);
        }else{
            $this->rendezvous = 0;
        }
    }

    public function getRappeler()
    {
        return $this->rappeler;
    }
    public function getRappelerPourcentage()
    {
        return ($this->getRappeler()/$this->getQuantiteTotale())*100;
    }
    public function setRappeler($rappeler)
    {
        $this->rappeler = $rappeler;
    }
    public function autoRappeler()
    {
        $res = array();
        if(isset($this->ltAppel)){
            foreach ($this->ltAppel as $row){
                if($row->getAction()=='rappeler'){
                    array_push($res,$row);
                }
            }
            $this->rappeler = count($res);
        }else{
            $this->rappeler = 0;
        }
    }

    public function getAgent()
    {
        return $this->Agent;
    }
    public function setAgent($Agent)
    {
        $this->Agent = $Agent;
    }

    public function autoSetPourcentage(){
        foreach ($this->ltPack as $key){
            $key->setPourcentage(($key->getVente()/$this->montantTotal)*100);
        }
    }
}