<?php
class SuperMakiModel{

    var $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    var $nom;
    var $ltCaisse = array();
    public function addDetail($detail){
        array_push($this->ltCaisse, $detail);
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return array
     */
    public function getLtCaisse()
    {
        return $this->ltCaisse;
    }

    /**
     * @param array $ltCaisse
     */
    public function setLtCaisse($ltCaisse)
    {
        $this->ltCaisse = $ltCaisse;
    }

}
?>

