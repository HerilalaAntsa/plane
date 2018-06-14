<?php
Class JumboDAO extends CI_Model{

    Public function __construct()
    {
        parent::__construct();
        $this->load->library('class/CaisseModel');

    }

    public function funcname($id)
    {
        $this->db->select('*');
        $this->db->from('Album a');
        $this->db->join('Category b', 'b.cat_id=a.cat_id', 'left');
        $this->db->join('Soundtrack c', 'c.album_id=a.album_id', 'left');
        $this->db->where('c.album_id',$id);
        $this->db->order_by('c.track_title','asc');
        $query = $this->db->get();
        if($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
    }

    function get_all_supermaki() {

        $this->db->select ( '*' );
        $this->db->from ( 'caisse' );
        $this->db->join ( 'supermaki', 'supermaki.ID_SUPERMAKI = caisse.ID_SUPERMAKI' , 'left' );
        $this->db->join ( 'facture', 'facture.ID_CAISSE = caisse.ID_CAISSE' , 'left' );
        $query = $this->db->get ();
        return $query->result ();
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
