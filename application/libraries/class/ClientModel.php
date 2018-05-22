<?php

class ClientModel
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
    var $nom;
    var $prenom;
    var $telephone;
    var $email;
    var $adresse;
    var $sexe;
    var $datenaissance;
    var $age;
    var $occupe;

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getFullName(){
        return trim($this->nom.' '.$this->prenom);
    }
    public function getTelephone()
    {
        return $this->telephone;
    }
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getSexe()
    {
        return $this->sexe;
    }
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }
    public function getSexeString(){

        switch ($this->sexe){
            case 'M' :
                return 'Homme';
            default :
                return 'Femme';
        }
    }

    public function getDatenaissance()
    {
        return $this->datenaissance;
    }
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;
        $this->setAge($datenaissance);
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($date)
    {
        $age = date('Y') - date('Y', strtotime($date));
        if (date('md') < date('md', strtotime($date))){
            $age = $age - 1;
        }
        $this->age = $age;
    }
    public function isOccupe()
    {
        if($this->getOccupe()){
            return true;
        }
        return false;
    }
    public function getOccupe()
    {
        return $this->occupe;
    }
    public function setOccupe($occupe)
    {
        $this->occupe = $occupe;
    }

}