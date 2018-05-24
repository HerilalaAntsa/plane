<?php
defined('BASEPATH') OR exit('No redirect script access allowed');

class Vol extends MY_controller{
    public function __construct(){
        parent::__construct();
        $this->load->library("pagination");

        $this->load->library('class/VolModel');
        $this->load->library('class/DetailReservationModel');
        $this->load->library('class/ReservationModel');
        $this->load->model('VolDao');

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
        try{
            $data["allers"] = $this->VolDao->
            rechercheAvance(1,$villedepart,$villearrivee,$datedepart);
            if ($typevol){
                $data["retours"] = $this->VolDao->
                rechercheAvance(1,$villearrivee,$villedepart,$datearrivee);
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
        $numerovolaller = $this->input->post('numerovolaller');
        $numerovolretour = $this->input->post('numerovolretour');
        $data['hidden'] = array(
            'numerovolaller' => $numerovolretour,
            'numerovolretour' => $numerovolaller,
            'classe' => $this->input->post('classe')
        );

        $data['contents'] = "planair-reservationinfo";
        $this->load->view('template',$data);
    }
    public function go($error='') {

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
        $data['contents'] = 'planair-numeroreservation';
        $this->load->view('template',$data);
    }
}
