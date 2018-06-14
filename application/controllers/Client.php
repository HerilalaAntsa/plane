<?php
defined('BASEPATH') OR exit('No redirect script access allowed');

class Jumbo extends MY_controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('class/ClientModel');
        $this->load->library('class/AppelModel');
        $this->load->model('ClientDao');
        $this->load->model('AgentDao');
    }
    public function fiche($id){
        $data["error"] = '';
        $data['client'] = $this->ClientDao->findById($id);
        $data['contents'] = "ficheClient";
        $data['titre'] = "TeleOperateur";
        $this->load->view('template',$data);
    }
    public function setOccupe($id = ''){
        $client = $this->ClientDao->findById($id);
        $client->setOccupe($this->session->userdata("connecte"));
        $this->ClientDao->update($client);
    }
    public function setPlusOccupe($id = ''){
        $client = $this->ClientDao->findById($id);
        $client->setOccupe(null);
        $this->ClientDao->update($client);
    }
    public function raccrocher($id = ''){
        $data["error"] = '';
        if($this->input->post('duree')>0){
            $client = $this->ClientDao->findById($id);
            $client->setOccupe(null);

            $appel = new AppelModel();
            if($this->session->has_userdata("agent")){
                $appel->setAgent($this->session->userdata("agent"));
            }
            if($this->session->has_userdata("manager")){
                $appel->setAgent($this->session->userdata("manager"));
            }

            $appel->setClient($client);
            // APPEL ENTRANT OU SORTANT
            $appel->setAppelEntrant(rand(0,1) == 1);
//        TIMER
            $date = new DateTime();
            $appel->setDateAppel($date->format('Y-m-d H:i:s'));
            $appel->setDureeAppel($this->input->post('duree'));
            $appel->setAction($this->input->post('action'));
            $appel->setDateAction($this->input->post('dateAction'));
            $appel->setCommentaireAction($this->input->post('commentaire'));

            $this->AgentDao->save($appel);

            $this->ClientDao->update($client);

            $this->fiche($id);
        }else{
            $data["error"] = "Aucun appel n'a été effectué.";
            $data['client'] = $this->ClientDao->findById($id);
            $data['contents'] = "ficheClient";
            $data['titre'] = "TeleOperateur";
            $this->load->view('template',$data);
        }
    }
    public function listeVote(){
        echo json_encode($this->Monde_model->getAllMonde());
    }

    public function down($id= '') {
        $data['client'] = $this->ClientDao->findById($id);
        $data['ltAppel'] = $this->ClientDao->findAppelById($id);
//        $data['ltAppelEntrant'] = $this->ClientDao->findAppelEntrantById($id);
//        $data['ltAppelSortant'] = $this->ClientDao->findAppelSortantById($id);

        $this->load->view('historiqueClientPDF', $data);
        // Get output html
        $html = $this->output->get_output();

        // Load library
        $this->load->library('dompdf_gen');

        // Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Historique-Client".strval($this->input->post('historique')).".pdf");

    }

    public function listeClientAppeler(){
        $data['contents'] = "listeClientAppel";
        $data['titre'] = "TeleOperateur";
        $this->load->view('template',$data);
    }

    public function listeClientJson(){
        echo json_encode($this->ClientDao->findAll());
    }

    public function rechercher(){
        $data['links'] = "";
        $data['results'] = "";
        $data['contents'] = "rechercheAvance";
        $data['titre'] = "TeleOperateur";
        $this->load->view('template',$data);
    }
}