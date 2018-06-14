<?php
class SuperMakiModel
{

    var $id;
    var $nom;

    public function getId()
    {
        return $this->id;
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

    public function setId($id)
    {
        $this->id = $id;
    }


}