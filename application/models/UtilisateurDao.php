<?php
Class UtilisateurDao extends CI_Model{

    Public function __construct()
    {
        parent::__construct();
        $this->load->library('class/AgentModel');
    }
    public function save($agent)
    {
        $data = array(
            'nom' => $agent->getNom(),
            'prenom' => $agent->getPrenom(),
            'email' => $agent->getEmail(),
            'password' => $agent->getPassword(),
            'hierarchie' => $agent->getHierarchie(),
            'sexe' => $agent->getSexe(),
            'datenaissance' => $agent->getDateNaissance(),
            'adresse' => $agent->getAdresse(),
            'telephone' => $agent->getTelephone(),
            'photo' => $agent->getPhoto()
        );

        $this->db->insert('agent', $data);
        return $this->db->insert_id();
    }

    public function update($agent){
        $data = array(
            'nom' => $agent->getNom(),
            'prenom' => $agent->getPrenom(),
            'email' => $agent->getEmail(),
            'password' => $agent->getPassword(),
            'hierarchie' => $agent->getHierarchie(),
            'sexe' => $agent->getSexe(),
            'datenaissance' => $agent->getDateNaissance(),
            'adresse' => $agent->getAdresse(),
            'telephone' => $agent->getTelephone(),
            'photo' => $agent->getPhoto()
        );
        $this->db->where(array('idagent' => $agent->getId()));
        return $this->db->update("agent",$data);
    }
    public function delete($id){
            $this->db->where('idagent', $id);
            if(!$this->db->delete('agent')) throw new Exception();
    }
    Public function findAll()
    {
        $res = $this->db->get('listagent');
        if ($res->num_rows() > 0) {
            $data = array();
            foreach ($res->result() as $row) {
                $item = new AgentModel();
                $this->creer($item, $row);
                array_push($data, $item);
            }
            return $data;
        }
        return 'FALSE';
    }

    public function findById($id){
        $query = $this->db->get_where('listagent',array('idagent' => $id));
        if ($query->num_rows() > 0) {
            $resultat = new AgentModel();
            $this->creer($resultat, $query->row());
            return $resultat;
        }
        throw new Exception('Agent introuvable');
    }
    public function login($email, $password){
        $query = $this->db->get_where('listagent',array('email' => $email,'password' => $password));
        if ($query->num_rows() > 0) {
            $resultat = new AgentModel();
            $this->creer($resultat, $query->row());
            return $resultat;
        }
        throw new Exception('Email ou mot de passe incorrect ! Veuillez vous assurer de vos identifiants');
    }

    public function record_count($limit, $start,$agent,$start_date,$end_date) {
        $this->db->like(array('UPPER(fullnameagent)' => strtoupper($agent->getNom())));
        if($agent->getHierarchie()){
            $this->db->where('hierarchie', $agent->getHierarchie());
        }
        $this->db->where('datenaissance >=', $start_date);
        $this->db->where('datenaissance <=', $end_date);

        return $this->db->count_all_results("listagent");
    }
    public function rechercheAvance($limit, $start,$agent,$start_date,$end_date,$tri){

        $this->db->like(array('UPPER(fullnameagent)' => strtoupper($agent->getNom())));
        $this->db->like(array('email' => $agent->getEmail()));
        $this->db->like(array('telephone' => $agent->getTelephone()));
        $this->db->like(array('UPPER(adresse)' => strtoupper($agent->getAdresse())));
        if($agent->getHierarchie()){
            $this->db->where('hierarchie', $agent->getHierarchie());
        }
        if($agent->enLigne){
            $this->db->where('enligne', $agent->isEnLigne());
        }
        if($agent->getSexe()){
            $this->db->where('sexe', $agent->getSexe());
        }
        $this->db->where('datenaissance >=', $start_date);
        $this->db->where('datenaissance <=', $end_date);

        $this->db->order_by($tri, "asc");

        $this->db->limit($limit, ($start-1)*$limit);
        $query = $this->db->get("listagent");
//    var_dump($query);
        if ($query->num_rows() > 0) {
            $data = array();
            foreach ($query->result() as $row) {
                $item = new AgentModel();
                $this->creer($item, $row);
                array_push($data, $item);
            }
            return $data;
        }
//        throw new Exception('Agent introuvable');
    }

    public function creer($model, $res)
    {
        $model->setId($res->idagent);
        $model->setNom($res->nom);
        $model->setPrenom($res->prenom);
        $model->setSexe($res->sexe);
        $model->setEmail($res->email);
        $model->setPassword($res->password);
        $model->setHierarchie($res->hierarchie);
        $model->setEnLigne($res->enligne);
        $model->setDernierAppel($res->dateappel);
        $model->setNomClient($res->fullname);
        $model->setAgo($res->ago);
        $model->setDateNaissance($res->datenaissance);
        $model->setTelephone($res->telephone);
        $model->setAdresse($res->adresse);
        $model->setPhoto($res->photo);
    }
}
?>
