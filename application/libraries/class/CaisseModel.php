<?php

class CaisseModel
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
    var $Supermaki;
    var $ltFacture = array();
    public function addDetail($detail){
        array_push($this->ltFacture, $detail);
    }

    /**
     * @return mixed
     */
    public function getSupermaki()
    {
        return $this->Supermaki;
    }

    /**
     * @param mixed $supermaki
     */
    public function setSupermaki($supermaki)
    {
        $this->Supermaki = $supermaki;
    }

    /**
     * @return array
     */
    public function getLtFacture()
    {
        return $this->ltFacture;
    }

    /**
     * @param array $ltFacture
     */
    public function setLtFacture($ltFacture)
    {
        $this->ltFacture = $ltFacture;
    }

}