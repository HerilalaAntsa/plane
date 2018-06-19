<?php
Class RepasDAO extends CI_Model{

    Public function __construct()
    {
        parent::__construct();
        $this->load->library('class/RepasModel');
    }

    /**
     * @param $candidat
     * @return mixed
     */


    public function findRepas()
    {
        $res = $this->db->get('repas');
        if ($res->num_rows() > 0) {
            $data = array();
            foreach ($res->result() as $row) {
                $item = new RepasModel();
                $this->createRepas($item, $row);
                array_push($data, $item);
            }
            return $data;
        }
        return 'FALSE';
    }


    public function findRepasById($repa){

        $query = $this->db->get_where('repas',array('ID_REPAS' => $repa));

        if ($query->num_rows() > 0) {
            $item = new RepasModel();
            foreach ($query->result() as $row) {
                $this->creer($item, $row);
            }
            return $item;
        }
    }


    public function recherche($limit, $page, $cv){
        try {
            $this->db->like('niveauEtude', $cv->getNiveauEtude(), 'both');
            $this->db->like('disponibilite', $cv->getDisponibilite(), 'both');
            $this->db->like('domaine', $cv->getDomaine(), 'both');
            $res = $this->db->get('cv',$limit,($page-1)*$limit);
            if ($res->num_rows() > 0) {
                $data = array();
                foreach ($res->result() as $row) {
                    $item = new CvModel();
                    $this->creer($item, $row);
                    array_push($data, $item);
                }
                return $data;
            }
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function countrecherche($cv){
        try {
            $this->db->like('niveauEtude', $cv->getNiveauEtude(), 'both');
            $this->db->like('disponibilite', $cv->getDisponibilite(), 'both');
            $this->db->like('domaine', $cv->getDomaine(), 'both');
            $this->db->from('cv');
            return $this->db->count_all_results();
        } catch (Exception $e) {
            return 0;
        }
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

        $candidat = new CandidatModel();
        $candidat->setDateNaissance($res->datenaissance);
        $candidat->setTel($res->telephone);
        $candidat->setAdresse($res->adresse);
        $candidat->setPhoto($res->photo);
        $candidat->setNom($res->nom);
        $candidat->setPrenom($res->prenom);
        $candidat->setSexe($res->sexe);
        $candidat->setMail($res->email);

        $model->setCandidat($candidat);
    }

    public function createRepas($model, $res){
        $model->setIDREPAS($res->ID_REPAS);
        $model->setPRIX($res->PRIX);
        $model->setNOM($res->NOM);
    }
}
