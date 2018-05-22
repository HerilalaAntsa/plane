<?php
class Utilisateur extends MY_controller {
    Public function __construct()
    {
        parent::__construct();
        $this->load->model('ManagerDAO');
        $this->load->model('AgentDao');
        $this->load->library('class/AgentModel');
    }

    public function index()
    {
        $table=$this->input->post('table');
        $data['error'] = "";
        if (!$this->session->has_userdata($table))
        {
            $this->form_validation->set_rules('mail', 'Email', 'trim|required|min_length[4]|max_length[30]');
            $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required|min_length[2]|alpha_dash');
            $data['redirection'] = "";
            if ($this->form_validation->run())
            {
                $login=$this->input->post('mail');
                $pass=$this->input->post('pass');
                try{
                    $user=$this->UtilisateurDao->login($login,$pass);
                    if($table=='agent'){
                        if($user->hierarchie>10) {
                            $data['error'] = "Veuillez-vous connecter en tant que manager";
                            $this->load->view('login',$data);
                        }else{
                            $this->session->set_userdata($table, $user);
                            $this->session->set_userdata('connecte', $user->getFullName());
                            $this->session->set_userdata('idAppelant', $user->getId());
                            redirect(base_url().'Accueil');
                        }
                    }else{
                        if($user->hierarchie<10) {
                            $data['error'] = "Veuillez-vous connecter en tant que téléopérateur";
                            $this->load->view('login',$data);
                        }else{
                            $this->session->set_userdata($table, $user);
                            $this->session->set_userdata('connecte', $user->getFullName());
                            redirect(base_url().'Accueil');
                        }
                    }
                }catch(Exception $e){
                    $data['error'] = $e->getMessage();
                    $this->load->view('login',$data);
                }
            }
            else{
                $this->load->view('login',$data);
            }
        }
        else{
            redirect(base_url().'Accueil');
        }
    }

    public function Inscription()
    {
//        if ($this->session->has_userdata('email')){
//            $this->session->sess_destroy();
//        }
        $data['error'] = "";
        if (!$this->session->has_userdata('mail'))
        {
            $this->form_validation->set_rules('nom', 'Nom', 'trim|required|min_length[1]');
            $this->form_validation->set_rules('prenom', 'Prenom', 'trim|required|min_length[1]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[4]|max_length[30]');
            $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required|min_length[2]|alpha_dash');
            $this->form_validation->set_rules('confirmPass', 'Confirm Password', 'required|matches[pass]');
            $this->form_validation->set_rules('adresse', 'Adresse', 'trim|required|min_length[1]');
            $this->form_validation->set_rules('telephone', 'Telephone', 'trim|required|min_length[1]');
            $data['redirection'] = "";
            if ($this->form_validation->run())
            {
                try{
                    $agent = new AgentModel();
                    $agent->setNom($this->input->post('nom'));
                    $agent->setPrenom($this->input->post('prenom'));
                    $agent->setEmail($this->input->post('email'));
                    $agent->setPassword($this->input->post('pass'));
                    $agent->setHierarchie($this->input->post('poste'));
                    $agent->setSexe($this->input->post('sexe'));
                    $agent->setDateNaissance($this->input->post('dateNaissance'));
                    $agent->setAdresse($this->input->post('adresse'));
                    $agent->setPhoto($this->do_upload());
                    $agent->setTelephone($this->input->post('telephone'));

                    $this->UtilisateurDao->save($agent);
                    redirect(base_url().'Agent/listAgent');
                }catch(Exception $e){
                    $data['error'] = $e->getMessage();
                    $data['contents'] = "ajoutAgent";
                    $data['redirection'] = "#ajoutAgent";
                    $this->load->view('template',$data);
                }
            }
            else{
                $data['contents'] = "ajoutAgent";
                $data['redirection'] = "#ajoutAgent";
                $this->load->view('template',$data);
            }
        }
        else{
            redirect(base_url().'Agent/listAgent');
        }
    }

    public function Modification($id)
    {
//        if ($this->session->has_userdata('email')){
//            $this->session->sess_destroy();
//        }
        $data['error'] = "";
        if ($id)
        {
            $data['error'] = "";
            $data['agent'] = $this->UtilisateurDao->findById($id);

            $data['contents'] = "modifierAgent";
            $data['titre'] = "TeleOperateur";
            $this->load->view('template',$data);
        }
        else{
            redirect(base_url().'Agent/listAgent');
        }
    }

    public function edit($id)
    {
//        if ($this->session->has_userdata('email')){
//            $this->session->sess_destroy();
//        }
        $data['error'] = "";
        if ($id)
        {
            $this->form_validation->set_rules('nom', 'Nom', 'trim|required|min_length[1]');
            $this->form_validation->set_rules('prenom', 'Prenom', 'trim|required|min_length[1]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[4]|max_length[30]');
            $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required|min_length[2]|alpha_dash');
            $this->form_validation->set_rules('confirmPass', 'Confirm Password', 'required|matches[pass]');
            $this->form_validation->set_rules('adresse', 'Adresse', 'trim|required|min_length[1]');
            $this->form_validation->set_rules('telephone', 'Telephone', 'trim|required|min_length[1]');
            if ($this->form_validation->run())
            {
                try{
                $agent = new AgentModel();
                $agent->setId($id);
                $agent->setNom($this->input->post('nom'));
                $agent->setPrenom($this->input->post('prenom'));
                $agent->setEmail($this->input->post('email'));
                $agent->setPassword($this->input->post('pass'));
                $agent->setHierarchie($this->input->post('poste'));
                $agent->setSexe($this->input->post('sexe'));
                $agent->setDateNaissance($this->input->post('dateNaissance'));
                $agent->setAdresse($this->input->post('adresse'));

//                $agent->setPhoto($this->do_upload());
                $agent->setPhoto($this->do_upload());
                $agent->setTelephone($this->input->post('telephone'));

                    $this->UtilisateurDao->update($agent);
                    redirect(base_url().'Agent/fiche/'.$id);
                }catch(Exception $e){
                    $data['error'] = $e->getMessage();
                    $data['agent'] = $this->UtilisateurDao->findById($id);
                    $data['ltAppel'] = $this->AgentDao->findAppelById($agent);
                    $data['ltAppelEntrant'] = $this->AgentDao->findAppelEntrantById($agent);
                    $data['ltAppelSortant'] = $this->AgentDao->findAppelSortantById($agent);

                    $data['contents'] = "ficheAgent";
                    $data['titre'] = "TeleOperateur";
                    $this->load->view('template',$data);
                }
            }
            else{
                redirect(base_url().'Utilisateur/Modification/'.$id);
            }
        }
        else{
            redirect(base_url().'Agent/listAgent');
        }
    }



    public function Deconnexion()
    {
        $this->session->sess_destroy();
				redirect();
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
//        echo $this->upload->display_errors();
        $var = $this->upload->data();
//        var_dump($var['file_name']);

        if($this->upload->do_upload('photo')){
            return $var['file_name'];
        }
        throw new Exception($this->upload->display_errors());
    }

}
?>
