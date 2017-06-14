<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  require APPPATH . '/libraries/REST_Controller.php';
  use Restserver\Libraries\REST_Controller;
  
  class WSRetos extends REST_Controller {
  
    public function __construct() {
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('Retos_model');
      $this->load->model('Usuario_model');
    }
   
    
		public function listarHorasDisponibles_get() {
			$dia = $this->input->get('dia');
			$fecha = $this->input->get('fecha');
			$data = $this->Retos_model->listarHorasDisponibles($dia, $fecha);
			$this->response($data);
		}
		
		public function guardarReto_get() {
      $idUsuario = $this->input->get('idUsuario');
      $cantidadJugadores = $this->input->get('cantidadJugadores');
      $nombreEquipo = $this->input->get('nombreEquipo');
      $fecha = $this->input->get('fechaSeleccionada');
      $idHora = $this->input->get('horaSeleccionada');
      
      if(isset($idUsuario) || isset($cantidadJugadores) || isset($nombreEquipo) || isset($fecha) || isset($idHora)) {
          $this->Retos_model->guardarReto($idUsuario, $cantidadJugadores, $nombreEquipo, $fecha, $idHora);
          $this->response(true);
      } else {
          $this->response(false);
      }
    }
    
    public function obtnerRetosporUsuario_get(){
      	$idUsuario = $this->input->get('IdUsuario');
    		if (isset($idUsuario)) {
    		  	$respuesta = $this->Usuario_model->obtnerRetosporUsuario($idUsuario);
    			  $this->response($respuesta);
    		} else {
    		    $this->response(false);
    		}
		}
			
	}
?>