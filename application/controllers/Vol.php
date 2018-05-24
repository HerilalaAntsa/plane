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
        $data['error'] = "";
        $data['redirection'] = "";

        $villedepart=$this->input->get('villedepart');
        $datedepart=$this->input->get('datedepart');
        $typevol=$this->input->get('typevol');
        $nombreadulte=$this->input->get('nombreadulte');
        $nombreenfant=$this->input->get('nombreenfant');
        $nombrebebe=$this->input->get('nombrebebe');
        $villearrivee=$this->input->get('villearrivee');
        $datearrivee=$this->input->get('datearrivee');
        $classe=$this->input->get('classe');
        $nbjour=$this->input->get('nbjour');
        try{
            $data["allers"] = $this->VolDao->
            rechercheAvance(1,$villedepart,$villearrivee,$datedepart, $nbjour);
            if ($typevol){
                $data["retours"] = $this->VolDao->
                rechercheAvance(1,$villearrivee,$villedepart,$datearrivee, $nbjour);
            }
            $data['hidden'] = array(
                'nombreadulte' => $nombreadulte,
                'nombreenfant' => $nombreenfant,
                'nombrebebe' => $nombrebebe,
                'classe' => $classe
            );
            $data['contents'] = "planair-resultat";
            $this->load->view('template',$data);
        }catch(Exception $e){
            $data['error'] = $e->getMessage();
            $this->load->view('Vol',$data);
        }
    }
    public function reserver(){
        if(!$this->input->post('numerovolaller')){
            redirect('Vol/reservation','refresh');
        }
        $data['nbadulte'] = $this->input->post('nombreadulte');
        $data['nbenfant'] = $this->input->post('nombreenfant');
        $data['nbbebe'] = $this->input->post('nombrebebe');
        $data['classe'] = $this->input->post('classe');
        $data['hidden'] = array(
            'numerovolaller' => $this->input->post('numerovolaller'),
            'numerovolretour' => $this->input->post('numerovolretour'),
            'classe'=> $this->input->post('classe'),
            'nombreadulte' => $this->input->post('nombreadulte'),
            'nombreenfant' => $this->input->post('nombreenfant'),
            'nombrebebe' => $this->input->post('nombrebebe')
        );

        $data['contents'] = "planair-reservationinfo";
        $this->load->view('template',$data);
    }
    public function go($error='') {
        $client = new ClientModel();
        $client->setNom($this->input->post('nomclient'));
        $client->setPrenom($this->input->post('prenomclient'));
        $client->setAdresse($this->input->post('adresseclient'));
        $client->setEmail($this->input->post('emailclient'));
        $client->setTelephone($this->input->post('telephoneclient'));

        $reservation = new ReservationModel();
        $reservation->setNombreAdulte($this->input->post('nombreadulte'));
        $reservation->setNombreEnfant($this->input->post('nombreenfant'));
        $reservation->setNombreBebe($this->input->post('nombrebebe'));
        $reservation->setIdVol($this->input->post('numerovolaller'));
        $reservation->setIdVolRetour($this->input->post('numerovolretour'));
        $reservation->setClass($this->input->post('classe'));
        $reservation->setIdClient($this->ClientDao->save($client));
        $data['numeroaller'] = md5(uniqid($client->getNom()+$reservation->getIdVol()));
        $data['numeroretour'] = md5(uniqid($client->getNom()+$reservation->getIdVolRetour()));
        $reservation->setNumeroReservation($data['numeroaller']);
        $reservation->setNumeroReservationRetour($data['numeroretour']);

        $nom = $this->input->post('nompassager');
        $prenom = $this->input->post('prenompassager');
        $naissance = $this->input->post('naissancepassager');
        for($i=0;$i<sizeof($nom);$i++)
        {
            $passager = new DetailReservationModel();
            $passager->setNomPassager($nom[$i]);
            $passager->setPrenomPassager($prenom[$i]);
            $passager->setDatenaissance($naissance[$i]);
            $reservation->addDetail($passager);
        }
        $this->VolDao->save($reservation);
        $data['contents'] = 'planair-numeroreservation';
        $this->load->view('template',$data);
    }
}
