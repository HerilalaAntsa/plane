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


    public function findCvById($cv){
        $query = $this->db->get_where('cv',array('id_cv' => $cv->getId()));
        if ($query->num_rows() > 0) {
            $data = array();
            foreach ($query->result() as $row) {
                $item = new CvModel();
                $this->creer($item, $row, $cv);
                array_push($data, $item);
            }
            return $data;
        }
    }

    public function creer($model, $res)
    {
        $model->setId($res->id_cv);
        $model->setCivilite($res->civilite);
        $model->setAdresse($res->adresse);
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
