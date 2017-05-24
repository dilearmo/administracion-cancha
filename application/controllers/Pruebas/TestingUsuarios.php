<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestingUsuarios extends CI_Controller {
    
    public function __construct() { 
        parent::__construct();
        $this->load->library('unit_test');
           $this->load->model('Usuario_model');
    }
    

    public function index()
    
    {
        //   return  $this->Prueba_insertarUsuario("ddfdf", "ffff", "dfdf", 343434, "hola", "hola@hotmail.com" ,1);
        //   return  $this->Prueba_actualizarHabilita("jeanpy", 1);
        //  return  $this->Prueba_siExiteNombreUsuario("jeanpy");
       //  return  $this->Prueba_noExiteNombreUsuario("unicornio69");
      
    }

     public function Prueba_insertarUsuario($Contrasena, $Nombre, $Apellidos, $Telefono, $NombreUsuario, $Correo ,$es_admin) 
     {
       $test_name = 'Prueba de insertar usuarios';
       $this->unit->run($this->Usuario_model->insertarUsuario($NombreUsuario, $Contrasena, $Telefono, $Correo, $Nombre, $Apellidos , 1), true, $test_name);
       echo $this->unit->report();
    }

     public function Prueba_actualizarHabilita($nombreUsuario, $habilitado) 
     {
       $test_name = 'Prueba de deshabilitar usuario';
       $this->unit->run($this->Usuario_model->actualizarHabilitar($nombreUsuario, $habilitado), true , $test_name);
       echo $this->unit->report();
    }
    
     public function Prueba_siExiteNombreUsuario($nombreUsuario) 
     {
       $test_name = 'Prueba de SI existe usuario';
       $this->unit->run($this->Usuario_model->obtenerUsuarioPorNombreUsuario($nombreUsuario), true , $test_name);
       echo $this->unit->report();
    }
    
         public function Prueba_noExiteNombreUsuario($nombreUsuario) 
     {
       $test_name = 'Prueba de NO existe usuario';
       $this->unit->run($this->Usuario_model->obtenerUsuarioPorNombreUsuario($nombreUsuario), false , $test_name);
       echo $this->unit->report();
    }
    
    
    

 }