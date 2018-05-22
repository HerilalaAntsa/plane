<?php
Class ClientDao extends CI_Model{

    Public function __construct()
    {
        parent::__construct();
        $this->load->library('class/ClientModel');
        $this->load->model('UtilisateurDao');
    }
    public function save($nom,$prenom,$mail,$pass,$table)
    {
        $this->load->database();
        $data = array(
            'idagent' => '',
            'nom' => $nom,
            'prenom' => $prenom,
            'mail' => $mail,
            'pass' => $pass,
        );

        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    public function update($model){
        $data = array(
            'nomclient' => $model->getNom(),
            'prenomclient' => $model->getPrenom(),
            'sexeclient' => $model->getSexe(),
            'datenaissanceclient' => $model->getDateNaissance(),
            'emailclient' => $model->getEmail(),
            'telephoneclient' => $model->getTelephone(),
            'adresseclient' => $model->getAdresse(),
            'isoccupe' => $model->getOccupe()
        );
        $this->db->where(array('idclient' => $model->getId()));
        return $this->db->update("client",$data);
    }
    public function delete($id,$table){
        $this->db->where('id'.$table, $id);
        return $this->db->delete($table);
    }
    Public function findAll()
    {
        $res = $this->db->get('client');
        if ($res->num_rows() > 0) {
            $data = array();
            foreach ($res->result() as $row) {
                $item = new ClientModel();
                $this->creer($item, $row);
                array_push($data, $item);
            }
            return $data;
        }
        return 'FALSE';
    }

    public function findById($id){
        $query = $this->db->get_where('client',array('idclient' => $id));
        if ($query->num_rows() > 0) {
            $resultat = new ClientModel();
            $this->creer($resultat, $query->row());
            return $resultat;
        }
        log_message('error', 'Client introuvable');
    }
    public function findAppelById($client){
        $query = $this->db->get_where('listappel',array('idclient' => $client));
        if ($query->num_rows() > 0) {
            $data = array();
            foreach ($query->result() as $row) {
                $item = new AppelModel();
                $this->creerByClient($item, $row);
                array_push($data, $item);
            }
            return $data;
        }
    }
    public function findAppelEntrantById($client){
        $query = $this->db->get_where('listappelentrant',array('idclient' => $client));
        if ($query->num_rows() > 0) {
            $data = array();
            foreach ($query->result() as $row) {
                $item = new AppelModel();
                $this->creerByClient($item, $row);
                array_push($data, $item);
            }
            return $data;
        }
        throw new Exception('Agent introuvable');
    }
    public function findAppelSortantById($client){
        $query = $this->db->get_where('listappelsortant',array('idclient' => $client));
        if ($query->num_rows() > 0) {
            $data = array();
            foreach ($query->result() as $row) {
                $item = new AppelModel();
                $this->creerByClient($item, $row);
                array_push($data, $item);
            }
            return $data;
        }
        throw new Exception('Agent introuvable');
    }
    public function creerByClient($model, $res)
    {
        $agent = $this->UtilisateurDao->findById($res->idagent);
        $model->setId($res->idappel);
        $model->setAgent($agent);
        $model->setClient($res->fullname);
        $model->setDateAppel($res->dateappel);
        $model->setAppelEntrant($res->appelentrant);
        $model->setDureeAppel($res->dureeappel);
        $model->setAction($res->action);
        $model->setDateAction($res->dateaction);
        $model->setCommentaireAction($res->commentaireaction);
    }
    public function creer($model, $res)
    {
        $model->setId($res->idclient);
        $model->setNom($res->nomclient);
        $model->setPrenom($res->prenomclient);
        $model->setTelephone($res->telephoneclient);
        $model->setEmail($res->emailclient);
        $model->setAdresse($res->adresseclient);
        $model->setSexe($res->sexeclient);
        $model->setDateNaissance($res->datenaissanceclient);
        $model->setOccupe($res->isoccupe);
    }
}
?>
