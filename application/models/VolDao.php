<?php
Class VolDao extends CI_Model{

    Public function __construct()
    {
        parent::__construct();
        $this->load->library('class/VolModel');
    }
    public function save($model)
    {
        $this->load->database();
        $data = array(
            'idagent' => $model->getAgent()->getId(),
            'idclient' => $model->getClient()->getId(),
            'appelentrant' => $model->isAppelEntrant(),
            'dateappel' => $model->getDateAppel(),
            'dureeappel' => $model->getDureeAppel(),
            'action' => $model->getAction(),
            'dateaction' => $model->getDateAction(),
            'commentaireaction' => $model->getCommentaireAction()
        );

        $this->db->insert("appel", $data);
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
    public function rechercheAvance($limit, $start,$isAllerRetour,$depart,$arrivee,$start_date,$end_date){
        $this->db->like(array('UPPER(villedepart)' => strtoupper($depart) , 'UPPER(villearrivee)' => strtoupper($arrivee)));
//        $this->db->where('dateappel BETWEEN '. $start_date. ' and '. $end_date);
        if(!$start_date) {
            $this->db->where('datedepart >=', $end_date);
            $this->db->where('datedepart <=', $end_date);
        }else{
            $this->db->where('datedepart >=', $start_date);
            $this->db->where('datedepart <=', $start_date);
        }

        $this->db->limit($limit, ($start-1)*$limit);
        $query = $this->db->get("vol");
//    var_dump($query);
        if ($query->num_rows() > 0) {
            $pagination = array();
            $pagination['total'] = $query->num_rows();
            $data = array();
            foreach ($query->result() as $row) {
                $item = new VolModel();
                $this->creerByVolRecherche($item, $row);
                if($isAllerRetour){
                    $retour = rechercheAvance(50,$start,false,$arrivee,$depart,null,$end_date);
                    $item->setVolRetour($retour);
                }
                array_push($data, $item);
            }
            $pagination['liste'] = $data;
            return $pagination;
        }
//        throw new Exception('Agent introuvable');
    }

    public function creer($model, $res)
    {
        $model->setId($res->idappel);
        $model->setClient($res->idclient);
        $model->setDateAppel($res->dateappel);
        $model->setAppelEntrant($res->appelentrant);
        $model->setDureeAppel($res->dureeappel);
        $model->setAction($res->action);
        $model->setDateAction($res->dateaction);
        $model->setCommentaireAction($res->commentaireaction);
    }
    public function creerByAgent($model, $res, $agent)
    {
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

    public function creerByVolRecherche($model, $res)
    {
        $model->setId($res->idvol);
        $model->setVilleDepart($res->villedepart);
        $model->setVilleArrivee($res->villearrivee);
        $model->setDateDepart($res->datedepart);
        $model->setDateArrivee($res->datearrivee);
        $model->setDistanceVol($res->distancevol);
        $model->setTarifEnfant($res->tarifenfant);
        $model->setTarifAdulte($res->tarifadulte);
        $model->setTarifBebe($res->tarifbebe);
        $model->setTarifEnfantAffaire($res->tarifenfant);
        $model->setTarifAdulteAffaire($res->tarifadulte);
        $model->setTarifBebeAffaire($res->tarifbebe);
    }

}
?>

+