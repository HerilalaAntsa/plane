<?php
Class SuperMakiDAO extends CI_Model{

    Public function __construct()
    {
        parent::__construct();
        $this->load->library('class/SuperMakiModel');
    }

    public function save(){
        $this->load->database;

        $data = array(
            'nom' => $this->input->post('anarana'),
            'prenom' => $this->input->post('fanampiny'),
            'dateNaissance' => $this->input->post('dateNaissance'),
            'email' => $this->input->post('mailaka'),
            'adresse' => $this->input->post('adiresy'),
            'pass' => $this->input->post('mdp'),
            'telephone' => $this->input->post('phon'),
        );
        $result = $this->db->insert('candidat', $data);
        return $result;
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

    public function findById($id){
        $query = $this->db->get_where('supermaki',array('id_supermaki' => $id));
        if ($query->num_rows() > 0) {
            $resultat = new SuperMakiModel();
            $this->creer($resultat, $query->row());
            return $resultat;
        }
        log_message('error', 'Supermaki introuvable');
    }


    public function creer($model, $res)
    {
        $model->setId($res->ID_SUPERMAKI);
        $model->setNom($res->NOMSUPERMAKI);
    }
}
