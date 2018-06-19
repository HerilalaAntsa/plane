<?php class IngredientModel{
    var $ID_MAT_PREM;
    var $ID_REPAS;
    var $QT_MAT_REQUISE;

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
    public function getQTMATREQUISE()
    {
        return $this->QT_MAT_REQUISE;
    }

    /**
     * @param mixed $QT_MAT_REQUISE
     */
    public function setQTMATREQUISE($QT_MAT_REQUISE)
    {
        $this->QT_MAT_REQUISE = $QT_MAT_REQUISE;
    }
}

?>