<?php
defined('BASEPATH') OR exit('No redirect script access allowed');
    class Candidat extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->library('class/CandidatModel');
            $this->load->library('class/CvModel');
            $this->load->model('CandidatDAO');
        }

        public function index(){
            $data['contents'] = "ezjob-index";
            $this->load->view('template',$data);
        }

        public function add(){
            $data['contents'] = "ezjob-add";
            $this->load->view('template',$data);
        }

        public function soumettre(){
            if(!$this->input->post('anarana')){
                redirect('Candidat/index','refresh');
            }
            $data['nom'] = $this->input->post('anarana');
            $data['prenoms'] = $this->input->post('fanampiny');
            $data['mail'] = $this->input->post('email');
            $data['dateNaissance'] = $this->input->post('dateNaissance');
            $data['etatCivil'] = $this->input->post('etatCivil');
            $data['experience'] = $this->input->post('experience');
            $data['formation'] = $this->input->post('formation');

            $data['hidden'] = array(

                'enposte' => 1,
                'disponibilite' => $this->input->post('dispo'),
                'domaine'=> $this->input->post('domaine'),

            );

            $data['contents'] = "ezjob-index.php";
            $this->load->view('template',$data);
        }

        public function lasa()
        {
            $candidat = new CandidatModel();
            $candidat->setNom($this->input->post('anarana'));
            $candidat->setPrenom($this->input->post('fanampiny'));
            $candidat->setMail($this->input->post('email'));
            $candidat->setDateNaissance($this->input->post('dateNaissance'));
            $candidat->setEtatCivil($this->input->post('etatCivil'));
            $candidat->setExperience($this->input->post('experience'));
            $candidat->setFormation($this->input->post('formation'));



            $this->CandidatDAO->save($candidat);
            $data['contents'] = 'ezjob-index.php';
            $this->load->view('template',$data);
        }
    }
?>