<?php
defined('BASEPATH') OR exit('No redirect script access allowed');

class Recherche extends MY_controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('analyse/Etat');
        $this->load->library("pagination");
        $this->load->library('class/AppelModel');
        $this->load->model('AgentDao');
        $this->load->model('EtatDao');
        $this->load->model('ManagerDAO');
    }
    public function index(){
        $this->page();
    }

    public function page($page=1) {
        $config = array();
        $config["base_url"] = base_url() . "Recherche/page/";
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $config["use_page_numbers"] = TRUE;


        $date = '01/01/2017 - 01/25/2018';
        if($this->input->get('dateRecherche')){
            $date  = $this->input->get('dateRecherche');
        }
        $pieces = explode(" - ", $date);
        $start_date = $pieces[0];
        $end_date = $pieces[1];
        $start_date = date("Y-m-d", strtotime($start_date));
        $end_date = date("Y-m-d", strtotime($end_date));

        $appel = new AppelModel();
        $appel->setAgent($this->input->get('agent'));
        $appel->setClient($this->input->get('client'));
        $appel->setAction($this->input->get('action'));

        $config["total_rows"] = $this->AgentDao->record_count(
            $config["per_page"],
            $page,
            $appel,
            $start_date,
            $end_date
        );

        $config['reuse_query_string'] = true;
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

        $this->pagination->initialize($config);

        $data["results"] = $this->AgentDao->
        rechercheAvance(
            $config["per_page"],
            $page,
            $appel,
            $start_date,
            $end_date
        );

        $data["links"] = $this->pagination->create_links();

        $data['contents'] = "rechercheAvance";
        $data['titre'] = "TeleOperateur";
        $this->load->view('template',$data);
    }

    public function detailStatistique($agent,$action='TOUS',$page=1){
        $agent = urldecode($agent);
        $action = urldecode($action);

        $config = array();
        $config["base_url"] = base_url() . "Recherche/detailStatistique/";
        $config["per_page"] = 20;
        $config["uri_segment"] = 3;
        $config["use_page_numbers"] = TRUE;


        $date = '01/01/2017 - 01/25/2030';
        if($this->input->get('dateRecherche')){
            $date  = $this->input->get('dateRecherche');
        }
        $pieces = explode(" - ", $date);
        $start_date = $pieces[0];
        $end_date = $pieces[1];
        $start_date = date("Y-m-d", strtotime($start_date));
        $end_date = date("Y-m-d", strtotime($end_date));

        $appel = new AppelModel();
        $appel->setAgent($agent);
        $appel->setClient('');
        $appel->setAction($action);

        $config["total_rows"] = $this->AgentDao->record_count(
            $config["per_page"],
            $page,
            $appel,
            $start_date,
            $end_date
        );

        $this->pagination->initialize($config);

        $data["results"] = $this->AgentDao->
        rechercheAvance(
            $config["per_page"],
            $page,
            $appel,
            $start_date,
            $end_date
        );

        $data["links"] = $this->pagination->create_links();

        $data['contents'] = "detailStatistique";
        $data['titre'] = "TeleOperateur";
        $this->load->view('template',$data);
    }
}
