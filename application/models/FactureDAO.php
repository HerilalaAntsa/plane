<?php
Class FactureDao extends CI_Model{

    Public function __construct()
    {
        parent::__construct();
        $this->load->library('class/FactureModel');
        $this->load->library('class/SuperMakiModel');
        $this->load->library('class/DetailFactureModel');
        $this->load->library('class/CaisseModel');
    }
    public function save($facture)
    {
        $data = array(
            'ID_FACTURE' => '',
            'ID_CAISSE' => $facture->getCaisse(),
            'DATEHEURE' => $facture->getDateHeure(),
            'PRIXTOTAL' => $facture->getPrixTotal()
        );
        $this->db->trans_off();
        $this->db->trans_begin();

        $this->db->insert("facture", $data);
        $id = $this->db->insert_id();


        foreach ($facture->detailFacture as $produit){
            $datadetail = array(
                'ID_PRODUIT' => $produit->getProduit(),
                'ID_FACTURE' => $id,
                'QUANTITE' => $produit->getQuantite()
            );
            $this->db->insert("detailfacture", $datadetail);
        }

        if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
        }
        else
        {
            $this->db->trans_commit();
        }

        return $this->db->insert_id();
    }

    public function update($id,$nom,$prenom,$mail,$pass,$table){
        $data = array(
            'nom' => $nom,
            'prenom' => $prenom,
            'mail' => $mail,
            'prenom' => $pass
        );
        $this->db->where(array('id'.$table => $id));
        return $this->db->update("user",$data);
    }
    public function delete($id,$table){
        $this->db->where('id'.$table, $id);
        return $this->db->delete($table);
    }

    public function findByIdSupermaki($id){
        $query = $this->db->get_where('supermaki',array('id_supermaki' => $id));
        if ($query->num_rows() > 0) {
            $item = new SuperMakiModel();
            $this->creerSupermaki($item, $query->row());
            $query = $this->db->get_where('caisse',array('id_supermaki' => $item->getId()));
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $item2 = new CaisseModel();
                    $this->creerCaisse($item2, $row);
                    $item->addDetail($item2);

                    $query3 = $this->db->get_where('facture',array('id_caisse' => $item2->getId()));
                    if ($query3->num_rows() > 0) {
                        foreach ($query3->result() as $row3) {
                            $item3 = new FactureModel();
                            $this->creer($item3, $row3);
                            $item2->addDetail($item3);

                            $query4 = $this->db->get_where('detailfacture',array('id_facture' => $item3->getId()));
                            if ($query->num_rows() > 0) {
                                foreach ($query4->result() as $row4) {
                                    $item4 = new DetailFactureModel();
                                    $this->creerDetail($item4, $row4);
                                    $item3->addDetail($item4);
                                }
                            }
                        }
                    }
                }
            }
            return $item;
        }
    }

    Public function findAllSupermaki()
    {
        $res = $this->db->get('supermaki');
        if ($res->num_rows() > 0) {
            $data = array();
            foreach ($res->result() as $row) {
                $item = new SuperMakiModel();
                $this->creerSupermaki($item, $row);
                $this->findByIdSupermaki($item->getId());
                array_push($data, $item);
            }
            return $data;
        }
        return 'FALSE';
    }

    public function findByIdCaisse($id){
        $query = $this->db->get_where('facture',array('id_caisse' => $id));
        if ($query->num_rows() > 0) {
            $data = array();
            foreach ($query->result() as $row) {
                $item = new FactureModel();
                $this->creer($item, $row);
                $query2 = $this->db->get_where('detailfacture',array('id_facture' => $item->getId()));
                if ($query->num_rows() > 0) {
                    foreach ($query2->result() as $row2) {
                        $item2 = new DetailFactureModel();
                        $this->creerDetail($item2, $row2);
                        $item->addDetail($item2);
                    }
                }
                array_push($data, $item);
            }
            return $data;
        }
    }

    public function findAppelById($agent){
        $query = $this->db->get_where('listappel',array('idagent' => $agent->getId()));
        if ($query->num_rows() > 0) {
            $data = array();
            foreach ($query->result() as $row) {
                $item = new AppelModel();
                $this->creerByAgent($item, $row, $agent);
                array_push($data, $item);
            }
            return $data;
        }
    }
    public function findAppelEntrantById($agent){
        $query = $this->db->get_where('listappelentrant',array('idagent' => $agent->getId()));
        if ($query->num_rows() > 0) {
            $data = array();
            foreach ($query->result() as $row) {
                $item = new AppelModel();
                $this->creerByAgent($item, $row, $agent);
                array_push($data, $item);
            }
            return $data;
        }
//        throw new Exception('Agent introuvable');
    }
    public function findAppelSortantById($agent){
        $query = $this->db->get_where('listappelsortant',array('idagent' => $agent->getId()));
        if ($query->num_rows() > 0) {
            $data = array();
            foreach ($query->result() as $row) {
                $item = new AppelModel();
                $this->creerByAgent($item, $row, $agent);
                array_push($data, $item);
            }
            return $data;
        }
//        throw new Exception('Agent introuvable');
    }

    public function record_count($limit, $start,$appel,$start_date,$end_date) {
        $this->db->like(array('UPPER(fullnameagent)' => strtoupper($appel->getAgent()) , 'UPPER(fullname)' => strtoupper($appel->getClient())));
        if($appel->getAction()){
            $this->db->where('action', $appel->getAction());
        }
//        $this->db->where('dateappel BETWEEN "'. date('Y-m-d', strtotime($start_date)). '" and "'. date('Y-m-d', strtotime($end_date)).'"');
        $this->db->where('dateappel >=', $start_date);
        $this->db->where('dateappel <=', $end_date);

        return $this->db->count_all_results("listappel2");
    }
    public function rechercheAvance($limit,$depart,$arrivee,$start_date, $nbjour = 3){
//        $this->db->where('dateappel BETWEEN '. $start_date. ' and '. $end_date);

        $start = strtotime($start_date);
        $dates=array();
        for($i=-$nbjour; $i <= $nbjour; $i++){
            array_push($dates,date('Y-m-d', strtotime($i." day", $start)));
        }
        $data = array();
        foreach ($dates as $date){
            $this->db->like(array('UPPER(villedepart)' => strtoupper($depart) , 'UPPER(villearrive)' => strtoupper($arrivee)));
            $this->db->where('datedepart >=', $date.' 00:00:00');
            $this->db->where('datedepart <= ', $date.' 23:59:59');
            $this->db->limit($limit, 0);
            $query = $this->db->get('vol');
            $data[$date]=new VolModel();
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $this->creerByVolRecherche($data[$date], $row);
                }
            }
        }
        return $data;
    }

    public function creerByVolRecherche($model, $res)
    {
        $model->setId($res->IDVOL);
        $model->setVilleDepart($res->VILLEDEPART);
        $model->setVilleArrive($res->VILLEARRIVE);
        $model->setDateDepart($res->DATEDEPART);
        $model->setDateArrive($res->DATEARRIVE);
        $model->setDistanceVol($res->DISTANCEVOL);
        $model->setTarifEnfant($res->TARIFENFANT);
        $model->setTarifAdulte($res->TARIFADULTE);
        $model->setTarifBebe($res->TARIFBEBE);
        $model->setTarifEnfantAffaire($res->TARIFENFANT);
        $model->setTarifAdulteAffaire($res->TARIFADULTE);
        $model->setTarifBebeAffaire($res->TARIFBEBE);
    }

    public function creer($model, $res)
    {
        $model->setId($res->ID_FACTURE);
        $model->setCaisse($res->ID_CAISSE);
        $model->setDateHeure($res->DATEHEURE);
        $model->setPrixTotal($res->PRIXTOTAL);
    }
    public function creerDetail($model, $res)
    {
        $model->setProduit($res->ID_PRODUIT);
        $model->setFacture($res->ID_FACTURE);
        $model->setQuantite($res->QUANTITE);
    }

    public function creerSupermaki($model, $res)
    {
        $model->setId($res->ID_SUPERMAKI);
        $model->setNom($res->NOMSUPERMAKI);
    }

    public function creerCaisse($model, $res)
    {
        $model->setId($res->ID_CAISSE);
        $model->setSupermaki($res->ID_SUPERMAKI);
    }
}
?>