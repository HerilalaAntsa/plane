<?php
class AgentModel
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
    var $sexe;
    var $email;
    var $password;
    var $hierarchie;
    var $ltAppel;
    var $enLigne;
    var $dernierAppel;
    var $nomClient;
    var $ago;
    var $dateNaissance;
    var $telephone;
    var $photo;
    var $adresse;

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

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getHierarchie()
    {
        return $this->hierarchie;
    }
    public function setHierarchie($hierarchie)
    {
        $this->hierarchie = $hierarchie;
        if($hierarchie=='TOUS'){
            $this->hierarchie = '';
        }
    }
    public function getHierarchieString()
    {
        $res = "MANAGER";
        if($this->getHierarchie()<10){
            $res = "AGENT";
        }
        return $res;
    }

    public function getLtAppel()
    {
        return $this->ltAppel;
    }
    public function setLtAppel($ltAppel)
    {
        $this->ltAppel = $ltAppel;
    }

    public function isEnLigne()
    {
        return $this->enLigne;
    }
    public function setEnLigne($enLigne)
    {
        $this->enLigne = $enLigne;
    }

    public function getDernierAppel()
    {
        return $this->dernierAppel;
    }
    public function setDernierAppel($dernierAppel)
    {
        $this->dernierAppel = $dernierAppel;
    }

    public function getNomClient()
    {
        return $this->nomClient;
    }
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;
        if(!$nomClient){
            $this->nomClient = "AUCUN";
        }
    }
    public function aDejaAppele()
    {
        $res = false;
        if($this->getNomClient()!="AUCUN"){
            $res = true;
        }
        return $res;
    }

    public function getAgo()
    {
        return $this->ago;
    }
    public function setAgo($ago)
    {
        $this->ago = $ago;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
        $this->setAge($dateNaissance);
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

    public function getTelephone()
    {
        return $this->telephone;
    }
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getPhoto()
    {
        return $this->photo;
    }
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

}