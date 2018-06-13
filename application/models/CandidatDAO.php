<?php
Class CandidatDAO extends CI_Model{

    Public function __construct()
    {
        parent::__construct();
        $this->load->library('class/CandidatModel');
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
}
