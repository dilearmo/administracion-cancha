<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  require APPPATH . '/libraries/REST_Controller.php';
  use Restserver\Libraries\REST_Controller;
  
  class WsCostos extends REST_Controller {
  
      public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Costos_model');
      }


public function Costos_get() {
  
 	$respuesta = $this->Costos_model->getCostos();
 	
 	$this->response($respuesta);
 	
  		}

  
  

  }
  ?>
  