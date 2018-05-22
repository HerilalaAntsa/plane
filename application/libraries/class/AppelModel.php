<?php
class AppelModel
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
    var $Agent;
    var $Client;
    var $dateAppel;
    var $appelEntrant = false;
    var $dureeAppel = 0;
    var $action;
    var $dateAction;
    var $commentaireAction;

    public function getAgent()
    {
        return $this->Agent;
    }
    public function setAgent($Agent)
    {
        $this->Agent = $Agent;
    }

    public function getClient()
    {
        return $this->Client;
    }
    public function setClient($Client)
    {
        $this->Client = $Client;
    }

    public function getDateAppel()
    {
        return $this->dateAppel;
    }
    public function getDateAppelString()
    {
        return date('d M Y H:m:s',$this->getDateAppel());
    }
    public function setDateAppel($dateAppel)
    {
        $this->dateAppel = $dateAppel;
    }
    public function getDateFinAppel()
    {
        return date('d M Y H:m:s',strtotime('+'.$this->getDureeAppel().' seconds', strtotime($this->dateAppel)));
    }

    public function isAppelEntrant()
    {
        return $this->appelEntrant;
    }
    public function getEtat()
    {
        $res = '';
        if($this->isAppelEntrant()){
            $res = 'Entrant';
        }else{
            $res = 'Sortant';
        }
        return $res;
    }
    public function setAppelEntrant($appelEntrant)
    {
        $this->appelEntrant = $appelEntrant;
    }

    public function getDureeAppelString()
    {
        return gmdate("H:i:s",$this->dureeAppel);
    }
    public function getDureeAppel()
    {
        return $this->dureeAppel;
    }
    public function setDureeAppel($dureeAppel)
    {
        $this->dureeAppel = $dureeAppel;
    }

    public function getAction()
    {
        return $this->action;
    }
    public function setAction($action)
    {
        if (is_numeric($action)) {
            switch ($action) {
                case "TOUS":
                    $this->action = '';
                    break;
                case 1:
                    $this->action = 'rendez-vous';
                    break;
                case 2:
                    $this->action = 'rappeler';
                    break;
                default :
                    $this->action = 'pas interesse';
            }
        }else if($action=='TOUS'){
            $this->action = '';
        }else{
            $this->action = $action;
        }
    }

    public function getDateAction()
    {
        return $this->dateAction;
    }
    public function setDateAction($dateAction)
    {
        if($this->getAction() != 'pas interesse'){
            $this->dateAction = $dateAction;
        }
    }

    public function getCommentaireAction()
    {
        return $this->commentaireAction;
    }
    public function setCommentaireAction($commentaireAction)
    {
        $this->commentaireAction = $commentaireAction;
    }
}