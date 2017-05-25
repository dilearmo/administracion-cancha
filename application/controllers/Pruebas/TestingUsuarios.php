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
          // return  $this->Prueba_insertarUsuario("benjamin", "cloro", "corcho", 123, "jiji", "hola@hotmail.com" ,1);
         //  return  $this->Prueba_actualizarHabilita("jeanpy", 1);
         // return  $this->Prueba_siExiteNombreUsuario("jeanpy");
       //  return  $this->Prueba_noExiteNombreUsuario("unicornio69");
      
    }

     public function Prueba_insertarUsuario($Contrasena, $Nombre, $Apellidos, $Telefono, $NombreUsuario, $Correo ,$es_admin) 
     {
       $test_name = 'Prueba de insertar usuarios';
       $test_notes= 'Se envian los datos de un usuario nuevo, que no esta registrado en BD';
       $this->unit->run($this->Usuario_model->insertarUsuario($NombreUsuario, $Contrasena, $Telefono, $Correo, $Nombre, $Apellidos , 1), true, $test_name, $test_notes);
       echo $this->unit->report();
    }

     public function Prueba_actualizarHabilita($nombreUsuario, $habilitado) 
     {
       $test_name = 'Prueba de deshabilitar usuario';
       $test_notes= 'Se habilita el usuario jeanpy y se espera una respuesta de true';
       $this->unit->run($this->Usuario_model->actualizarHabilitar($nombreUsuario, $habilitado), true , $test_name, $test_notes);
       echo $this->unit->report();
    }
    
     public function Prueba_siExiteNombreUsuario($nombreUsuario) 
     {
       $test_name = 'Prueba de SI existe usuario';
       $test_notes= 'Valida si el el nombre del usuario existe. En este caso probamos con un nombre de usuario que si existe.';
       $this->unit->run($this->Usuario_model->obtenerUsuarioPorNombreUsuario($nombreUsuario), true , $test_name , $test_notes);
       echo $this->unit->report();
    }
    
         public function Prueba_noExiteNombreUsuario($nombreUsuario) 
     {
       $test_name = 'Prueba de NO existe usuario';
       $test_notes= 'Se prueba que el nombre de usuario unicornio69 no existe, se espera una respuesta false';
       $this->unit->run($this->Usuario_model->obtenerUsuarioPorNombreUsuario($nombreUsuario), false , $test_name, $test_notes);
       echo $this->unit->report();
    }
    
    
    

 }