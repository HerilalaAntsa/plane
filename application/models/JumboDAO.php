<?php
Class JumboDAO extends CI_Model{

    Public function __construct()
    {
        parent::__construct();
        $this->load->library('class/CaisseModel');
        $this->load->library('class/StatModel');

    }

    function get_all_supermaki() {
        return $this->db->query('SELECT s.NOMSUPERMAKI, c.ID_CAISSE, SUM( PRIXTOTAL ) , f.DATEHEURE
        FROM supermaki s, facture f, caisse c
        WHERE s.ID_SUPERMAKI = c.ID_SUPERMAKI
        AND f.ID_CAISSE = c.ID_CAISSE
        GROUP BY ID_CAISSE')->result_array();

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
        $res = $this->db->get('caisse');
        if ($res->num_rows() > 0) {
            $data = array();
            foreach ($res->result() as $row) {
                $item = new CaisseModel();
                $this->creer($item, $row);
                array_push($data, $item);
            }
            return $data;
        }
        return 'FALSE';
    }

    public function findById($id){
        $query = $this->db->get_where('client',array('idclient' => $id));
        if ($query->num_rows() > 0) {
            $resultat = new ClientModel();
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
        $model->setId($res->id_caisse);
        $model->setSupermaki($res->id_supermaki);
    }

}
?>
