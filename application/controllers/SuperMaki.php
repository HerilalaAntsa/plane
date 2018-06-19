<?php
defined('BASEPATH') OR exit('No redirect script access allowed');
class SuperMaki extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('class/StatModel');
    }

    public function index(){
        $data['error'] = '';
        $data['contents'] = "maki-index";
        $this->load->view('template',$data);
    }

}
?>