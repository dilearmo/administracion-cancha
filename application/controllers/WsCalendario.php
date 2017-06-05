<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
  require APPPATH . '/libraries/REST_Controller.php';
  use Restserver\Libraries\REST_Controller;

class WsCalendario extends REST_Controller {

	public function __construct()
	{
           parent::__construct();
           $this->load->helper('url');
           $this->load->helper('form');
           $this->load->model('Calendario_model');
    }
	 



	public function reservas_get()
	{
		$fecha = $this->input->get('fecha');
	 $data = $this->Calendario_model->ReservasXFecha($fecha);
		$this->response($data);
	}
	
		public function bloqueos_get()
	{
		$fecha = $this->input->get('fecha');
	  $data = $this->Calendario_model->BloqueosXFecha($fecha);
		$this->response($data);
	}
	
}
