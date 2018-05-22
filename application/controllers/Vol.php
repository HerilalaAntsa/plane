<?php
defined('BASEPATH') OR exit('No redirect script access allowed');

class Vol extends MY_controller{
    public function __construct(){
        parent::__construct();
        $this->load->library("pagination");

        $this->load->library('class/VolModel');
        $this->load->model('VolDao');

    }
    public function index(){
        $data["error"] = "";
        $data['ltAgent'] = $this->UtilisateurDao->findAll();
        $data['contents'] = "listeAgent";
        $data['titre'] = "TeleOperateur";
        $this->load->view('template',$data);
    }
    public function ajoutAgent(){
        $data['contents'] = "ajoutAgent";
        $data['titre'] = "TeleOperateur";
        $this->load->view('template',$data);
    }
    public function listAgent($page=1,$error='') {

        $data['error'] = trim($error);
        $config = array();
        $config["base_url"] = base_url() . "Agent/listAgent/";
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config["use_page_numbers"] = TRUE;


        $date = '01/01/1950 - 01/01/2017';
        if($this->input->get('dateRecherche')){
            $date  = $this->input->get('dateRecherche');
        }
        $pieces = explode(" - ", $date);
        $start_date = $pieces[0];
        $end_date = $pieces[1];
        $start_date = date("Y-m-d", strtotime($start_date));
        $end_date = date("Y-m-d", strtotime($end_date));

        $agent = new AgentModel();
        $agent->setNom($this->input->get('agent'));
        $agent->setEmail($this->input->get('email'));
        $agent->setTelephone($this->input->get('telephone'));
        $agent->setAdresse($this->input->get('adresse'));
        $agent->setSexe($this->input->get('sexe'));
        $agent->setHierarchie($this->input->get('hierarchie'));
        $agent->setEnLigne($this->input->get('statut'));

        $tri = $this->input->get('tri');

        $config["total_rows"] = $this->UtilisateurDao->record_count(
            $config["per_page"],
            $page,
            $agent,
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

        $data["results"] = $this->UtilisateurDao->
        rechercheAvance(
            $config["per_page"],
            $page,
            $agent,
            $start_date,
            $end_date,
            $tri
        );

        $data["links"] = $this->pagination->create_links();

        $data['contents'] = "listAgentTableau";
        $data['titre'] = "TeleOperateur";
        $this->load->view('template',$data);
    }
    public function fiche($id){
//        var_dump($this->upload->do_upload('photo'));
        $data['error'] = "";
        $data['agent'] = $this->UtilisateurDao->findById($id);
        $data['ltAppel'] = $this->AgentDao->findAppelById($data['agent']);
        $data['ltAppelEntrant'] = $this->AgentDao->findAppelEntrantById($data['agent']);
        $data['ltAppelSortant'] = $this->AgentDao->findAppelSortantById($data['agent']);

        $data['contents'] = "ficheAgent";
        $data['titre'] = "TeleOperateur";
        $this->load->view('template',$data);
    }
    public function statistique(){
        $data['stats'] = $this->EtatDao->findAll();

        $data['contents'] = "statistique";
        $data['titre'] = "TeleOperateur";
        $this->load->view('template',$data);
    }

    public function down() {
        $ltAgent = $this->UtilisateurDao->findAll();
        foreach ($ltAgent as $row){
            $row->setLtAppel($this->AgentDao->findAppelById($row));
        }
        $data['ltAgent'] = $ltAgent;
//        $data['ltAppelEntrant'] = $this->ClientDao->findAppelEntrantById($id);
//        $data['ltAppelSortant'] = $this->ClientDao->findAppelSortantById($id);

        $html = $this->load->view('listeAppelPDF', $data, true);
        // Get output html
//        $html = $this->output->get_output();

        // Load library
        $this->load->library('dompdf_gen');

        // Convert to PDF
//        $this->dompdf->set_base_path(base_url());
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Liste-Appel-teleoperateur".strval($this->input->post('listeAppel')).".pdf");

    }

    public function Delete($id)
    {
        $data['error'] = "";
        if ($id)
        {
            $agent = $this->UtilisateurDao->findById($id);

            try{
                $this->UtilisateurDao->delete($id);
                $data['error'] = "Utilisateur supprimé.";
            }catch (Exception $e) {
                var_dump("aaa");
                if($agent->getSexe()=='M') {
                    $data['error'] = 'Impossible de supprimer ' . $agent->getFullName() . ' car il a deja effectué un appel';
                }else{
                    $data['error'] = 'Impossible de supprimer ' . $agent->getFullName() . ' car elle a deja effectué un appel';
                }
            }

            $this->listAgent(1,$data['error']);
        }
        else{
            redirect(base_url().'Agent/listAgent');
        }
    }
}
