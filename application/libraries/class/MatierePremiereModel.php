<?php
class MatierePremiereModel
{
    var $ID_MAT_PREM;
    var $PRIX_MAT;
    var $STOCK;
    var $NOM_MAT_PREM;

    /**
     * @return mixed
     */
    public function getIDMATPREM()
    {
        return $this->ID_MAT_PREM;
    }

    /**
     * @param mixed $ID_MAT_PREM
     */
    public function setIDMATPREM($ID_MAT_PREM)
    {
        $this->ID_MAT_PREM = $ID_MAT_PREM;
    }

    /**
     * @return mixed
     */
    public function getPRIXMAT()
    {
        return $this->PRIX_MAT;
    }

    /**
     * @param mixed $PRIX_MAT
     */
    public function setPRIXMAT($PRIX_MAT)
    {
        $this->PRIX_MAT = $PRIX_MAT;
    }

    /**
     * @return mixed
     */
    public function getSTOCK()
    {
        return $this->STOCK;
    }

    /**
     * @param mixed $STOCK
     */
    public function setSTOCK($STOCK)
    {
        $this->STOCK = $STOCK;
    }

    /**
     * @return mixed
     */
    public function getNOMMATPREM()
    {
        return $this->NOM_MAT_PREM;
    }

    /**
     * @param mixed $NOM_MAT_PREM
     */
    public function setNOMMATPREM($NOM_MAT_PREM)
    {
        $this->NOM_MAT_PREM = $NOM_MAT_PREM;
    }
}
?>