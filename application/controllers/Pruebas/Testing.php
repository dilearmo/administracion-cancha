<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {
    
    public function __construct() { 
        parent::__construct();
        $this->load->library('unit_test');
           $this->load->model('Usuario_model');
   
    }
    

public function index()

{
  
    // $test_name = 'Resta de minutos';
    // $hora1 = '1';
    // $hora2 = '2';
    // $esperado = '3';
    // $suma = $hora1 + $hora2;
    //  $this->unit->run($suma, $esperado, $test_name);
    //  $this->unit->run($suma, 4, $test_name);
    // echo $this->unit->report();
    
  //   return  $this->Prueba_insertarUsuario("ddfdf", "ffff", "dfdf", 343434, "hola", "hola@hotmail.com" ,1);
  //   return  $this->Prueba_actualizarHabilita("jeanpy", 1);
    
  
    
 
    // $test_name = 'Resta de horas';
    // $hora1 = '15:15';
    // $hora2 = '12:30';
    // $esperado = '02:45';
    // $suma = $this->hora->restarTiempo($hora1,$hora2);
    // echo $this->unit->run($suma, $esperado, $test_name);
 
    // $test_name = 'Resta de horas menos minutos';
    // $hora1 = '12:08';
    // $hora2 = '00:15';
    // $esperado = '11:53';
    // $suma = $this->hora->restarTiempo($hora1,$hora2);
    // echo $this->unit->run($suma, $esperado, $test_name);
    
//     $this->unit->run($valor,'is_string','Prueba 1');
// $this->unit->run($valor,'is_bool','Prueba 2');
// $this->unit->run($valor,'is_true','Prueba 3');
// $this->unit->run($valor,'is_false','Prueba 4');
// $this->unit->run($valor,'is_int','Prueba 5');
// $this->unit->run($valor,'is_numeric','Prueba 6');
// $this->unit->run($valor,'is_float','Prueba 7');
// $this->unit->run($valor,'is_double','Prueba 8');
// $this->unit->run($valor,'is_array','Prueba 9');
// $this->unit->run($valor,'is_null','Prueba 10');


// $test_name = 'Resta de minutos';
// $hora1 = '00:45';
// $hora2 = '00:20';
// $esperado = '00:25';
// $suma = $this->hora->restarTiempo($hora1,$hora2);
// echo $this->unit->run($suma, $esperado, $test_name);
    

}

 public function Prueba_insertarUsuario($Contrasena, $Nombre, $Apellidos, $Telefono, $NombreUsuario, $Correo ,$es_admin) {
  $test_name = 'Prueba de insertar usuarios';
   $this->unit->run($this->Usuario_model->insertarUsuario($NombreUsuario, $Contrasena, $Telefono, $Correo, $Nombre, $Apellidos , 1), true, $test_name);
   echo $this->unit->report();
}

 public function Prueba_actualizarHabilita($nombreUsuario, $habilitado) {
  $test_name = 'Prueba de deshabilitar usuario';
   $this->unit->run($this->Usuario_model->actualizarHabilitar($nombreUsuario, $habilitado), "true" , $test_name);
   echo $this->unit->report();
}

 }