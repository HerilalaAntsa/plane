<?php
    class CandidatModel{

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
        var $pass;
        var $mail;
        var $adresse;
        var $tel;
        var $sexe;
        var $dateNaissance;
        var $photo;

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

        /**
         * @return mixed
         */
        public function getSexe()
        {
            return $this->sexe;
        }

        /**
         * @param mixed $sexe
         */
        public function setSexe($sexe)
        {
            $this->sexe = $sexe;
        }

        /**
         * @return mixed
         */
        public function getPhoto()
        {
            return $this->photo;
        }

        /**
         * @param mixed $photo
         */
        public function setPhoto($photo)
        {
            $this->photo = $photo;
        }
    }
?>