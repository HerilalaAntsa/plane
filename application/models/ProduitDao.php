<?php
Class ProduitDao extends CI_Model{

    Public function __construct()
    {
        parent::__construct();
        $this->load->library('class/CaisseModel');

    }
    public function save($client)
    {
        $this->load->database();
        $data = array(
            'idclient' => '',
            'nomclient' => $client->getNom(),
            'prenomclient' => $client->getPrenom(),
            'emailclient' => $client->getEmail(),
            'telephoneclient' => $client->getTelephone(),
            'adresseclient' => $client->getAdresse()
        );

        $this->db->insert('client', $data);
        return $this->db->insert_id();
    }
    public function update($model){
        $data = array(
            'nomclient' => $model->getNom(),
            'prenomclient' => $model->getPrenom(),
            'emailclient' => $model->getEmail(),
            'telephoneclient' => $model->getTelephone(),
            'adresseclient' => $model->getAdresse()
        );
        $this->db->where(array('idclient' => $model->getId()));
        return $this->db->update("client",$data);
    }
    public function delete($id,$table){
        $this->db->where('id'.$table, $id);
        return $this->db->delete($table);
    }

    Public function findAll()
    {
        $res = $this->db->get('produit');
        if ($res->num_rows() > 0) {
            $data = array();
            foreach ($res->result() as $row) {
                $item = new ProduitModel();
                $this->creer($item, $row);
                array_push($data, $item);
            }
            return $data;
        }
        return 'FALSE';
    }

    public function findById($id){
        $query = $this->db->get_where('produit',array('id_produit' => $id));
        if ($query->num_rows() > 0) {
            $resultat = new ProduitModel();
            $this->creer($resultat, $query->row());
            return $resultat;
        }
        log_message('error', 'Client introuvable');
    }
    public function findReservationById($client){
        $query = $this->db->get_where('reservation',array('idclient' => $client));
        if ($query->num_rows() > 0) {
            $data = array();
            foreach ($query->result() as $row) {
                $item = new ReservationModel();
                $this->creerByClient($item, $row);
                array_push($data, $item);
            }
            return $data;
        }
        throw new Exception('Reservation introuvable');
    }
    public function creer($model, $res)
    {
        $model->setId($res->id_produit);
        $model->setNom($res->nomproduit);
        $model->setPrixUnitaire($res->prixunitaire);
        $model->setUnite("");
    }
}
?>
