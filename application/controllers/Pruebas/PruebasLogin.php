<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'controllers/WSUsuario.php');

class PruebasLogin extends CI_Controller {
    
    public function __construct() { 
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('Usuario_model');
    }
    

    public function index() {
        return  $this->Prueba_validarDatosLogin('hola12345', 'jeanpy');
      
    }
    
    public function Prueba_validarDatosLogin($contrasena, $nombreUsuario)  {
        $test_name = 'Prueba de Validar datos de logueo';
        $this->unit->run($this->validarCredenciales($_GET['nombreUsuario'] = $nombreUsuario), true, $test_name);
        echo $this->unit->report();
    }
    
    

 }