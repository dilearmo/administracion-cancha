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
  			  
  			  $respuesta = $this->Usuario_model->insertarUsuario($Contrasena,$Nombre,$Apellidos,$Telefono,$NombreUsuario,$Correo);
  			  
  			  $this->response($respuesta);
  			  
  			} else {
  			  $this->response(false);

  			}
  		}
  }
  /* $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
          return json_encode($arr);  */
  ?>