<?php
Class CandidatDAO extends CI_Model{

    Public function __construct()
    {
        parent::__construct();
        $this->load->library('class/CandidatModel');
    }

    /**
     * @param $candidat
     * @return mixed
     */
    public function save($candidat){
        $this->load->database;

        $data = array(
            'id_candidat' => '',
            'nom' => $candidat->getNom(),
            'prenom' => $candidat->getPrenom(),
            'email' => $candidat->getEmail(),
            'pass' => $candidat->getPass(),
            'adresse' => $candidat->getAdresse(),
            'tel' => $candidat->getTel(),
            'dateNaissance' => $candidat->getDateNaissance()

        );

        $this->db->insert('candidat', $data);
        $id = $this->db->insert_id();

        foreach ($candidat->cv as $plus){
            $dataplus = array(
                'niveauEtudes' => $plus->getNiveauEtudes(),
                'experience' => $plus->getExperience(),
                'civilite' => $plus->getCivilite(),
                'ville' => $plus->getVille(),
                'formation' => $plus->getFormation(),
                'competence' => $plus->getCompetence(),
                'enposte' => $plus->getEnPoste(),
                'domaine' => $plus->getDomaine(),
                'disponibilite' => $plus->getDisponibilite(),
                'idCv' => $id
            );
            $this->db->insert("cv", $dataplus);
        }

    }
}
