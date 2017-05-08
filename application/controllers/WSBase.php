<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  require APPPATH . '/libraries/REST_Controller.php';
  use Restserver\Libraries\REST_Controller;
  
  class WSBase extends REST_Controller {
  
      public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Usuario_model');
      }
      
      public function existeNombreUsuario_get() {
			$nombreUsuario = $this->input->get('nombreUsuario');
			if (isset($nombreUsuario)) {
				$respuesta = $this->Usuario_model->existeNombreUsuario($nombreUsuario);
				$this->response($respuesta);
			}
		}
  }
  
?>