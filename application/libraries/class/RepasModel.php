<?php
class RepasModel
{

    var $ID_REPAS;
    var $PRIX;
    var $NOM;
    var $QT;

    /**
     * @return mixed
     */
    public function getQT()
    {
        return $this->QT;
    }

    /**
     * @param mixed $QT
     */
    public function setQT($QT)
    {
        $this->QT = $QT;
    }

    /**
     * @return mixed
     */
    public function getIDREPAS()
    {
        return $this->ID_REPAS;
    }

    /**
     * @param mixed $ID_REPAS
     */
    public function setIDREPAS($ID_REPAS)
    {
        $this->ID_REPAS = $ID_REPAS;
    }

    /**
     * @return mixed
     */
    public function getPRIX()
    {
        return $this->PRIX;
    }

    /**
     * @param mixed $PRIX
     */
    public function setPRIX($PRIX)
    {
        $this->PRIX = $PRIX;
    }

    /**
     * @return mixed
     */
    public function getNOM()
    {
        return $this->NOM;
    }

    /**
     * @param mixed $NOM
     */
    public function setNOM($NOM)
    {
        $this->NOM = $NOM;
    }

}
?>