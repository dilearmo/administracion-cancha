<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  require APPPATH . '/libraries/REST_Controller.php';
  use Restserver\Libraries\REST_Controller;
  
  class WsReservas extends REST_Controller {
  
      public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Reservas_model');
        $this->load->model('Usuario_model');
        
      }
      
     	/*
    	*
    	testeado por MJ
    	*
    	*/
      
    		public function reservas_get()
	{
		$data = $this->Reservas_model->listarReservas();
		$this->response($data);
	}
	
			public function eliminar_get()
	{
		
	 $id = $this->input->get('id');
	  $data = $this->Reservas_model->eliminar($id);
		$this->response(true);
	}
	
	public function bloqueables_get()
	{
		$fecha = $this->input->get('fecha');
	    $dia = $this->traducirDia(date('D', strtotime($fecha)));
	    $data = $this->Bloqueo_model->bloqueables($dia,$fecha);
		$this->response($data);
	}
    
    		public function usuarios_get()
	{
		$data = $this->Usuario_model->listarUsuarios();
		$this->response($data);
	}
	

		   		public function usuarioXreserva_get()
	{
			$id = $this->input->get('idReserva');
		$data = $this->Reservas_model->UserXReserva($id);
		$this->response($data);
	}
	
	   		public function ReservaXid_get()
	{
			$id = $this->input->get('idReserva');
		$data = $this->Reservas_model->ReservaXid($id);
		$this->response($data);
	}
	
		   		public function getSesion_get()
	{
		
		$data = $_SESSION["Ident"];
		$this->response($data);
	}
	
	
	  	
}
  ?>