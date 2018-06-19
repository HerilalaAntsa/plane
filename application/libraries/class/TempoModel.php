<?php
class TempoModel
{

    var $NOM;
    var $QT;
    var $PRIX;

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
        if ($QT > 0) {
            $this->QT = $QT;
        }else(die('Veuillez reverifier votre quantite !'));
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

}
?>