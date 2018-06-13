<?php
Class CvDAO extends CI_Model{

    Public function __construct()
    {
        parent::__construct();
        $this->load->library('class/CandidatModel');
        $this->load->library('class/CvModel');
    }

    /**
     * @param $candidat
     * @return mixed
     */
    public function save($cv)
    {
        $data = array(
            'id_cv' => '',
            'civilite' => $cv->getCivilite(),
            'experience' => $cv->getExperience(),
            'formation' => $cv->getFormation(),
            'competence' => $cv->getCompetence(),
            'situation' => $cv->getSituation(),
            'domaine' => $cv->getDomaine(),
            'disponibilite' => $cv->getDisponibilite(),
            'ville' => $cv->getVille(),
            'niveauEtude' => $cv->getNiveauEtude(),
            'nom' => $cv->getCandidat()->getNom(),
            'prenom' => $cv->getCandidat()->getPrenom(),
            'email' => $cv->getCandidat()->getMail(),
            'adresse' => $cv->getCandidat()->getAdresse(),
            'telephone' => $cv->getCandidat()->getTel(),
            'sexe' => $cv->getCandidat()->getSexe(),
            'photo' => $cv->getCandidat()->getPhoto(),
            'dateNaissance' => $cv->getCandidat()->getDateNaissance()
        );
        try {
            $this->db->insert('cv', $data);
            $id = $this->db->insert_id();
        } catch (Exception $e) {
            throw $e;
        }
    }
}
