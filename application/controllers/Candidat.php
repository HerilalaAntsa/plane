<?php
defined('BASEPATH') OR exit('No redirect script access allowed');
    class Candidat extends MY_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->library('class/CandidatModel');
            $this->load->library('class/CvModel');

        }

        public function index(){
            $data['error'] = '';
            $data['cv'] = new CandidatModel();
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

        public function SendCV()
        {
            $data['error'] = "";
            $cv = new CvModel();
            $candidat = new CandidatModel();
            $candidat->setNom($this->input->post('nom'));
            $candidat->setPrenom($this->input->post('prenom'));
            $candidat->setMail($this->input->post('email'));
            $candidat->setAdresse($this->input->post('adresse'));
            $candidat->setTel($this->input->post('telephone'));
            $candidat->setSexe($this->input->post('sexe'));
            $candidat->setDateNaissance($this->input->post('dateNaissance'));

            $cv->setCivilite($this->input->post('etatCivil'));
            $cv->setExperience($this->input->post('experience'));
            $cv->setFormation($this->input->post('formation'));
            $cv->setCompetence($this->input->post('competence'));
            $cv->setSituation($this->input->post('situation'));
            $cv->setDomaine($this->input->post('domaine'));
            $cv->setDisponibilite($this->input->post('dispo'));
            $cv->setVille($this->input->post('ville'));
            $cv->setNiveauEtude($this->input->post('niveauEtude'));
            if($this->input->post('autre')){
                $cv->setNiveauEtude($this->input->post('autre'));
            }

            $this->form_validation->set_rules('nom', 'Nom', 'trim|required|min_length[1]');
            $this->form_validation->set_rules('sexe', 'Sexe', 'required');
            $this->form_validation->set_rules('prenom', 'Prenom', 'trim|required|min_length[1]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[4]|max_length[30]');
            $this->form_validation->set_rules('adresse', 'Adresse', 'trim|required|min_length[1]');
            $this->form_validation->set_rules('telephone', 'Telephone', 'trim|required|min_length[1]|numeric');
            $this->form_validation->set_rules('photo', 'Photo', 'required');
            if ($this->form_validation->run()) {
                try {

                    $candidat->setPhoto($this->do_upload());

                    $cv->setCandidat($candidat);

                    $this->CvDAO->save($cv);
       //             $data['contents'] = 'ezjob-index.php';
      //              $this->load->view('template', $data);
                }catch(Exception $e){
                    $data['error'] = $e->getMessage();
                    $data['cv'] = $cv;

                    $data['contents'] = "ezjob-index.php";
                    $data['titre'] = "EasyJob";
                    $this->load->view('template',$data);
                }
            }
            else{
                $data['error'] = "";
                $data['cv'] = $cv;

                $data['contents'] = "ezjob-index.php";
                $data['titre'] = "EasyJob";
                $this->load->view('template',$data);
            }
        }
        function do_upload()
        {
            $config['upload_path'] = './assets/images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '1000';
            $config['max_width']  = '1024';
            $config['max_height']  = '1024';
            $config['overwrite'] = TRUE;
            $config['encrypt_name'] = FALSE;
            $config['remove_spaces'] = TRUE;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $this->upload->do_upload('photo');
            $var = $this->upload->data();
//        var_dump($var['file_name']);

            if($this->upload->do_upload('photo')){
                return $var['file_name'];
            }
            throw new Exception($this->upload->display_errors());
        }
    }
?>