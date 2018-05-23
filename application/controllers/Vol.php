<?php
defined('BASEPATH') OR exit('No redirect script access allowed');

class Vol extends MY_controller{
    public function __construct(){
        parent::__construct();
        $this->load->library("pagination");

        $this->load->library('class/VolModel');
        $this->load->library('class/DetailReservationModel');
        $this->load->library('class/ReservationModel');
        $this->load->library('class/ClientModel');
        $this->load->model('VolDao');
        $this->load->model('ClientDao');
    }
    public function index(){
        $data['contents'] = "planair-index";
        $this->load->view('template',$data);
    }
    public function reservation(){
        $data['contents'] = "planair-reservation";
        $this->load->view('template',$data);
    }
    public function recherche(){
        $villedepart = $this->input->get('villedepart');
        $datedepart = $this->input->get('datedepart');
        $typevol = $this->input->get('typevol');
        $villearrivee = $this->input->get('villearrivee');
        $datearrivee = $this->input->get('datearrivee');
        $nbadulte = $this->input->get('nombreadulte');
        $nbenfant = $this->input->get('nombreenfant');
        $nbbebe = $this->input->get('nombrebebe');
        $classe = $this->input->get('classe');

        $paginate = $this->VolDao->rechercheAvance($maxResult, $page, $typevol, $villedepart, $villearrivee, $datedepart, $datearrivee);
        if($page-1 > $paginate['total']){
            $this->page(1);
            return;
        }
        $config['reuse_query_string'] = true;
        $config['base_url'] = base_url('recherche');
        $config['total_rows'] = $paginate['total'];
        $config['per_page'] = $maxResult;
        $config['num_links'] = '1';
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination">'; //balise ouvrante de la pagination
        $config['full_tag_close'] = '</ul>'; //balise fermante de la pagination
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        //Initialisation pagination
        $data['contents'] = "planair-resultat";
        $data['liste'] = $paginate['liste'];
        $this->pagination->initialize($config);

        $this->load->view('template',$data);
    }
    public function reserver(){
        if(!$this->input->post('numerovolaller')){
            redirect('reservation','refresh');
        }
        $data['nbadulte'] = $this->input->post('nombreadulte');
        $data['nbenfant'] = $this->input->post('nombreenfant');
        $data['nbbebe'] = $this->input->post('nombrebebe');
        $data['classe'] = $this->input->post('classe');
        $data['hidden'] = array(
            'numerovolaller' => $this->input->post('numerovolaller'),
            'numerovolretour' => $this->input->post('numerovolretour'),
            'classe'=> $this->input->post('classe')
        );

        $data['contents'] = "plainair-reservationinfo";
        $this->load->view('template',$data);
    }
    public function go($error='') {
        $client = new ClientModel();
        $client->setNom($this->input->post('nomclient'));
        $client->setPrenom($this->input->post('prenomclient'));
        $client->setAdresse($this->input->post('adresseclient'));
        $client->setEmail($this->input->post('emailclient'));
        $client->setTelephone($this->input->post('telephoneclient'));

        $passagers = array();

        $nom = $this->input->post('nompassager');
        $prenom = $this->input->post('prenompassager');
        $naissance = $this->input->post('naissancepassager');
        for($i=0;$i<sizeof($nom);$i++)
        {
            $passager = new DetailReservationModel();
            $passager->setNomPassager($nom[$i]);
            $passager->setPrenomPassager($prenom[$i]);
            $passager->setDatenaissance($naissance[$i]);
            array_push($passagers,$passager);
        }
        $reservation = new ReservationModel();
        $reservation->setNombreAdulte($this->input->post('nombreadulte'));
        $reservation->setNombreEnfant($this->input->post('nombreenfant'));
        $reservation->setNombreBebe($this->input->post('nombrebebe'));
        $reservation->setIdVol($this->input->post('idvolaller'));
        $reservation->setIdVolRetour($this->input->post('idvolretour'));
        $reservation->setClass($this->input->post('classe'));
        $reservation->setIdClient($this->ClientDao->save($client));
        $data['numeroaller'] = md5(uniqid($client->getNom()+$reservation->getIdVol()));
        $data['numeroretour'] = md5(uniqid($client->getNom()+$reservation->getIdVolRetour()));
        $reservation->setNumeroReservation($data['numeroaller']);
        $reservation->setNumeroReservationRetour($data['numeroretour']);
        $this->VolDao->save($reservation);

        $data['contents'] = 'planair-numeroreservation';
        $this->load->view('template',$data);
    }
}
