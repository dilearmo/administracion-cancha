<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  require APPPATH . '/libraries/REST_Controller.php';
  use Restserver\Libraries\REST_Controller;
  
  class WSUsuario extends REST_Controller {
  
      public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Usuario_model');
      }
      
      
      
     	/*
    	*
    	testeado por MJ
    	*
    	*/
  		public function actualizarHabilitar_get() {
  			$NombreUsuario = $this->input->get('NombreUsuario');
  			$habilitado = $this->input->get('habilitado');
  			if(isset($NombreUsuario) && isset($habilitado)){
    				// Se establece la respuesta con respecto al resultado de la consulta a la base de datos
    				$respuesta = $this->Usuario_model->actualizarHabilitar($NombreUsuario, $habilitado);
    				//Se envía TRUE si se realizó bien la inserción de los datos de lo contrario FALSE
    				$this->response( true, REST_Controller::HTTP_OK);  	
  			} else{
  				  $this->response(false);
  			}
		}
      
    	/*
    	*
    	testeado por MJ
    	*
    	*/
      public function existeNombreUsuario_get() {
  			$nombreUsuario = $this->input->get('nombreUsuario');
  			if (isset($nombreUsuario)) {
  				$respuesta = $this->Usuario_model->existeNombreUsuario($nombreUsuario);
  				$this->response($respuesta);
  			}
  		}
  		
  		public function validarCredenciales_get() {
  			$nombreUsuario = $this->input->get('nombreUsuario');
  			$contrasena = $this->input->get('contrasena');
  			if (isset($nombreUsuario) && isset($contrasena)) {
  				$respuesta = $this->Usuario_model->obtenerUsuarioPorNombreUsuario($nombreUsuario);
  				if($respuesta != false) {
  				  if(strcasecmp($respuesta->NombreUsuario, $nombreUsuario) == 0 && strcasecmp($respuesta->Contrasena, md5($contrasena)) == 0) {
  				    $this->response($respuesta);
  				  } else {
  				    $this->response(false);
  				  }
  				}
  			}
  		}
  		
  		public function RegistroUsuario_get() {
  		  
  		$Contrasena=$this->input->get('Contrasena');
  		$Nombre=$this->input->get('Nombre');
  		$Apellidos=$this->input->get('Apellidos');
  		$Telefono=$this->input->get('Telefono');
  		$NombreUsuario=$this->input->get('NombreUsuario');
  		$Correo=$this->input->get('Correo');
  			if (isset($Contrasena) && isset($Nombre) && isset($Apellidos) && isset($Telefono) && isset($NombreUsuario) && isset($Correo)) {
  			  
  			  $respuesta = $this->Usuario_model->insertarUsuario($Contrasena,$Nombre,$Apellidos,$Telefono,$NombreUsuario,$Correo,1);
  			  
  			  $this->response($respuesta);
  			  
  			} else {
  			  $this->response(false);

  			}
  		}
  }
  /* $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
          return json_encode($arr);  */
  ?>