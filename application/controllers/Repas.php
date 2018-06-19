<?php
defined('BASEPATH') OR exit('No redirect script access allowed');
class Repas extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('class/RepasModel');
        $this->load->library('class/TempoModel');
        $this->load->model('RepasDAO');
        $this->load->model('TempoDAO');
    }

    public function index(){
        $data['error'] = '';
        $data['repas'] = new RepasModel();
        $data['ltRepas'] = $this->RepasDAO->findRepas();
        $data['contents'] = "maki-index";
        $this->load->view('template',$data);
    }

    public function commandy(){
        if(!$this->input->post('NOM')){
            redirect('Repas/','refresh');
        }
        $data['NOM'] = $this->input->post('nomrepas');
        $data['QT'] = $this->input->post('quantite');
        );

        $data['contents'] = "commander";
        $this->load->view('template',$data);
    }


}
?>