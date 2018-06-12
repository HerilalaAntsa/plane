<?php
    class CvModel{
        var $id;
        var $candidat;
        var $niveauEtudes;
        var $experience;
        var $civilite;
        var $ville;

        /**
         * @return mixed
         */
        public function getVille()
        {
            return $this->ville;
        }

        /**
         * @param mixed $ville
         */
        public function setVille($ville)
        {
            $this->ville = $ville;
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getCandidat()
        {
            return $this->candidat;
        }

        /**
         * @param mixed $candidat
         */
        public function setCandidat($candidat)
        {
            $this->candidat = $candidat;
        }

        /**
         * @return mixed
         */
        public function getNiveauEtudes()
        {
            return $this->niveauEtudes;
        }

        /**
         * @param mixed $niveauEtudes
         */
        public function setNiveauEtudes($niveauEtudes)
        {
            $this->niveauEtudes = $niveauEtudes;
        }

        /**
         * @return mixed
         */
        public function getExperience()
        {
            return $this->experience;
        }

        /**
         * @param mixed $experience
         */
        public function setExperience($experience)
        {
            $this->experience = $experience;
        }

        /**
         * @return mixed
         */
        public function getCivilite()
        {
            return $this->civilite;
        }

        /**
         * @param mixed $civilite
         */
        public function setCivilite($civilite)
        {
            $this->civilite = $civilite;
        }
    }
?>

