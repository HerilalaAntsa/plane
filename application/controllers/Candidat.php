<?php
defined('BASEPATH') OR exit('No redirect script access allowed');
    class Candidat extends MY_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->library('class/CandidatModel');
            $this->load->model('./CandidatDAO');
        }

        public function index(){
            $data['contents'] = "ezjob-index";
            $this->load->view('template',$data);
        }

        public function add(){
            $data['contents'] = "ezjob-add";
            $this->load->view('template',$data);
        }

        public function save(){
            $cd = new CandidatDAO();
            $data=$this->$cd->save();
            echo json_encode($data);
        }

    }
?>