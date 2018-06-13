<?php
Class ManagerDAO extends CI_Model{

    Public function __construct()
    {
        parent::__construct();
        $this->load->library('class/ManagerModel');
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
        $query = $this->db->get_where('administrateur',array('email' => $email,'password' => $password));
        if ($query->num_rows() > 0) {
            $resultat = new ManagerModel();
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
    public function rechercheAvance($limit,$start,$cv,$tri){

        $this->db->like(array('niveauEtude' => $cv->getNiveauEtude()));
        $this->db->like(array('disponibilite' => $cv->getDisponibilite()));
        $this->db->like(array('domaine' => $cv->getDomaine()));

            if($cv->getNom()){
                $this->db->where('nom', $cv->getNom());
            }
            if($cv->getPrenom()){
                $this->db->where('disponibilite', $cv->getPrenom());
            }
            if($cv->getDomaine()){
                $this->db->where('domaine', $cv->getDomaine());
            }

        $this->db->order_by($tri, "asc");

        $this->db->limit($limit, ($start-1)*$limit);
        $query = $this->db->get("cv");
//    var_dump($query);
        if ($query->num_rows() > 0) {
            $data = array();
            foreach ($query->result() as $row) {
                $item = new CvModel();
                $this->creer($item, $row);
                array_push($data, $item);
            }
            return $data;
        }
//        throw new Exception('Agent introuvable');
    }

    public function creer($model, $res)
    {
        $model->setId($res->id_cv);
        $model->setCivilite($res->civilite);
        $model->setExperience($res->experience);
        $model->setFormation($res->formation);
        $model->setCompetence($res->competence);
        $model->setSituation($res->situation);
        $model->setDomaine($res->domaine);
        $model->setDisponibilite($res->disponibilite);
        $model->setVille($res->ville);
        $model->setNiveauEtude($res->niveauEtude);
        $model->setNom($res->nom);
        $model->setPrenom($res->prenom);
        $model->setDatenaissance($res->datenaissance);
        $model->setPhoto($res->photo);
    }
}
?>
