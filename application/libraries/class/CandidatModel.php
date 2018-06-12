<?php
    class CandidatModel{
        var $id_candidat;

        /**
         * @return mixed
         */
        public function getIdCandidat()
        {
            return $this->id_candidat;
        }

        /**
         * @param mixed $id_candidat
         */
        public function setIdCandidat($id_candidat)
        {
            $this->id_candidat = $id_candidat;
        }
        var $nom;
        var $prenom;
        var $pass;
        var $mail;
        var $adresse;
        var $tel;
        var $dateNaissance;

        /**
         * @return mixed
         */
        public function getMail()
        {
            return $this->mail;
        }

        /**
         * @param mixed $mail
         */
        public function setMail($mail)
        {
            $this->mail = $mail;
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
         * @return mixed
         */
        public function getPrenom()
        {
            return $this->prenom;
        }

        /**
         * @param mixed $prenom
         */
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }

        /**
         * @return mixed
         */
        public function getPass()
        {
            return $this->pass;
        }

        /**
         * @param mixed $pass
         */
        public function setPass($pass)
        {
            $this->pass = $pass;
        }

        /**
         * @return mixed
         */
        public function getAdresse()
        {
            return $this->adresse;
        }

        /**
         * @param mixed $adresse
         */
        public function setAdresse($adresse)
        {
            $this->adresse = $adresse;
        }

        /**
         * @return mixed
         */
        public function getTel()
        {
            return $this->tel;
        }

        /**
         * @param mixed $tel
         */
        public function setTel($tel)
        {
            $this->tel = $tel;
        }

        /**
         * @return mixed
         */
        public function getDateNaissance()
        {
            return $this->dateNaissance;
        }

        /**
         * @param mixed $dateNaissance
         */
        public function setDateNaissance($dateNaissance)
        {
            $this->dateNaissance = $dateNaissance;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

    }
?>