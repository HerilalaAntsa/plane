<?php 
class Pdf extends CI_Controller {

    public function down($id= '') { 
        $this->load->model('LivraisonModel');   
       
        $data['livraison'] = $this->LivraisonModel->getLivraisonByAxe($id);
        
        $this->load->view('livraisonaxe', $data);
		// Get output html
		$html = $this->output->get_output();
		
		// Load library
		$this->load->library('dompdf_gen');
		
		// Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("LivraisonT".strval($this->input->post('axe')).".pdf");
        
    }
}