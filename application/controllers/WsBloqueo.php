<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
  require APPPATH . '/libraries/REST_Controller.php';
  use Restserver\Libraries\REST_Controller;

class WsBloqueo extends REST_Controller {

	public function __construct()
	{
           parent::__construct();
           $this->load->helper('url');
           $this->load->helper('form');
           $this->load->model('Bloqueo_model');
    }
	 

	
		public function bloqueo_get()
	{
		$data = $this->Bloqueo_model->listarHoras();
		$this->response($data);
	}
	
			public function eliminar_get()
	{
		
	 $id = $this->input->get('id');
	    $data = $this->Bloqueo_model->eliminar($id);
		$this->response(true);
	}
	
	
	
}
