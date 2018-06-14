<?php
defined('BASEPATH') OR exit('No redirect script access allowed');
class SuperMaki extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('class/SuperMakiModel');
        $this->load->model('SuperMakiDAO');
    }

    public function index(){
        $data['error'] = '';
        $data['cv'] = new SuperMakiModel();
        $data['contents'] = "maki-index";
        $this->load->view('template',$data);
    }

    public function jumbo(){
        $data['error'] = '';
        $data['cv'] = new JumboDAO();
        $data['contents'] = "jumbo-index";
        $this->load->view('template',$data);
    }

    public function add(){
        $data['contents'] = "ezjob-add";
        $this->load->view('template',$data);
    }

    public function ficheCV($id){
        $data["error"] = '';
        $data['cv'] = $this->CvDAO->findCvById($id);
        $data['contents'] = "ficheAgent";
        $data['titre'] = "EasyJob";
        $this->load->view('template',$data);
    }
    public function Modification($id){
        $data["error"] = '';
        $data['cv'] = $this->CvDAO->findCvById($id);
        $data['contents'] = "ezjob-edit";
        $data['titre'] = "EasyJob";
        $this->load->view('template',$data);
    }
    public function modifier()
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
        $candidat->setPhoto($this->input->post('prevphoto'));

        $cv->setId($this->input->post('id'));
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
        $cv->setCandidat($candidat);
        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('nom', 'Nom', 'trim|required|min_length[1]');
        $this->form_validation->set_rules('sexe', 'Sexe', 'required');
        $this->form_validation->set_rules('prenom', 'Prenom', 'trim|required|min_length[1]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[4]|max_length[30]');
        $this->form_validation->set_rules('adresse', 'Adresse', 'trim|required|min_length[1]');
        $this->form_validation->set_rules('telephone', 'Telephone', 'trim|required|min_length[1]|numeric');

        if (!($this->input->post('prevphoto')) && empty($_FILES['photo']['name']))
        {
            $this->form_validation->set_rules('photo', 'Photo', 'required');
        }
        if ($this->form_validation->run()) {
            try {
                if (!empty($_FILES['photo']['name']))
                {
                    $candidat->setPhoto($this->do_upload());
                }
                $this->CvDAO->update($cv);
                //$data['cv'] = $cv;
                //$data['contents'] = 'ficheAgent.php';
                //$this->load->view('template', $data);
                redirect('Candidat/ficheCV/'.strval($cv->getId()), 'refresh');
            }catch(Exception $e){
                $data['error'] = $e->getMessage();
                $data['cv'] = $cv;

                $data['contents'] = "ezjob-edit.php";
                $data['titre'] = "EasyJob";
                $this->load->view('template',$data);
            }
        }
        else{

            $data['error'] = "";
            $data['cv'] = $cv;
            $data['contents'] = "ezjob-edit.php";
            $data['titre'] = "EasyJob";
            $this->load->view('template',$data);
        }
    }
    public function pdf($id= '') {

        $data['cv'] = $this->CvDAO->findCvById($id);

        $this->load->view('cvPDF', $data);
        // Get output html
        $html = $this->output->get_output();

        // Load library
        $this->load->library('dompdf_gen');

        // Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("CV-".strval($data['cv']->getCandidat()->getId()).$data['cv']->getCandidat()->getNom().".pdf");

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
        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('nom', 'Nom', 'trim|required|min_length[1]');
        $this->form_validation->set_rules('sexe', 'Sexe', 'required');
        $this->form_validation->set_rules('prenom', 'Prenom', 'trim|required|min_length[1]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[4]|max_length[30]');
        $this->form_validation->set_rules('adresse', 'Adresse', 'trim|required|min_length[1]');
        $this->form_validation->set_rules('telephone', 'Telephone', 'trim|required|min_length[1]|numeric');
        if (empty($_FILES['photo']['name']))
        {
            $this->form_validation->set_rules('photo', 'Photo', 'required');
        }
        if ($this->form_validation->run()) {
            try {

                $candidat->setPhoto($this->do_upload());

                $cv->setCandidat($candidat);

                $this->CvDAO->save($cv);
                $data['contents'] = 'ezjob-index.php';
                $this->load->view('template', $data);
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