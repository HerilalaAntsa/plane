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

}