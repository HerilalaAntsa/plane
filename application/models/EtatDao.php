<?php
Class EtatDao extends CI_Model{

    Public function __construct()
    {
        parent::__construct();
        $this->load->library('analyse/Etat');
    }


    public function findAll(){
        $query = $this->db->get('statistique');
        if ($query->num_rows() > 0) {
            $data = array();
            foreach ($query->result() as $row) {
                $item = new Etat();
                $this->creer($item, $row);
                array_push($data, $item);
            }
            return $data;
        }
    }
    public function creer($model, $res)
    {
        $agent = new AgentModel();
            $agent->setId($res->idagent);
            $agent->setNom($res->fullname);
        $model->setAgent($agent);
        $model->setQuantiteTotale($res->quantitetotale);
        $model->setRendezvous($res->rendezvous);
        $model->setRappeler($res->rappeler);
        $model->setPasinteresse($res->pasinteresse);
    }
}
?>
