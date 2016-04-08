<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colegios extends CI_Controller {

	public function index()
	{
		
		$this->load->view('colegios');
	}

	    public function get_all()
    {
        
        $start = $this->input->post('pagina');
        
        $data = $this->Colegio_model->get_datatables($start);
        echo json_encode($data);
    }

        public function get_by_letter()
    {
        
        $data = $this->Colegio_model->get_by_letter($this->input->post('letra'));
        echo json_encode($data);
    }

      public function get_like()
    {
        
        $data = $this->Colegio_model->get_like($this->input->post('search'));
        
        echo json_encode($data);
    }


}
