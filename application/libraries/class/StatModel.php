<?php
    class StatModel{

        var $NOMSUPERMAKI;
        var $ID_CAISSE;
        var $ARGENT_EN_CAISSE;
        var $NOMBRE_FACTURE_PAR_SUPERMAKI;

        /**
         * @return mixed
         */
        public function getNOMSUPERMAKI()
        {
            return $this->NOMSUPERMAKI;
        }

        /**
         * @param mixed $NOMSUPERMAKI
         */
        public function setNOMSUPERMAKI($NOMSUPERMAKI)
        {
            $this->NOMSUPERMAKI = $NOMSUPERMAKI;
        }

        /**
         * @return mixed
         */
        public function getIDCAISSE()
        {
            return $this->ID_CAISSE;
        }

        /**
         * @param mixed $ID_CAISSE
         */
        public function setIDCAISSE($ID_CAISSE)
        {
            $this->ID_CAISSE = $ID_CAISSE;
        }

        /**
         * @return mixed
         */
        public function getARGENTENCAISSE()
        {
            return $this->ARGENT_EN_CAISSE;
        }

        /**
         * @param mixed $ARGENT_EN_CAISSE
         */
        public function setARGENTENCAISSE($ARGENT_EN_CAISSE)
        {
            $this->ARGENT_EN_CAISSE = $ARGENT_EN_CAISSE;
        }

        /**
         * @return mixed
         */
        public function getNOMBREFACTUREPARSUPERMAKI()
        {
            return $this->NOMBRE_FACTURE_PAR_SUPERMAKI;
        }

        /**
         * @param mixed $NOMBRE_FACTURE_PAR_MAKI
         */
        public function setNOMBREFACTUREPARSUPERMAKI($NOMBRE_FACTURE_PAR_SUPERMAKI)
        {
            $this->NOMBRE_FACTURE_PAR_SUPERMAKI = $NOMBRE_FACTURE_PAR_SUPERMAKI;
        }
    }
?>