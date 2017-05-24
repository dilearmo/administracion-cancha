<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PruebaBloqueos extends CI_Controller {
    
    public function __construct() { 
        parent::__construct();
        $this->load->library('unit_test');
           $this->load->model('Bloqueo_model');
           }
    
    public function index() { 
   $this->insertarBlockeo('2017-10-10','Martes','8');
   //$this->eliminarBlockeo('13');
    }
    
 public function insertarBlockeo($fecha, $dia, $hora) {
 $nombreDelTesst = "insersion de bloqueo";
 $valor_esperado = "correcto";
 $notas = "Prueba de insesion de nuevo bloqueo, recibe tres parametros, el primero una fecha en formato A-M-D, un nombre del deia y un entero que es la hora de la Hora Reservable que necesitamos obtener, Retorna true si el registro a podido ser creado";
   
 $this->unit->run($this->Bloqueo_model->insertar($fecha, $dia, $hora),$valor_esperado ,$notas);
 echo $this->unit->report();
    }
    
  public function eliminarBlockeo($idhora) {
 $nombreDelTesst = "eliminacion de bloqueo";
 $valor_esperado = "correcto";
 $notas = "Prueba de eliminacion de bloqueo, recibe 1 parametro,  entero que es el identificador de la Hora Reservable que necesitamos eliminar, Retorna true si el registro a podido ser eliminado";
   
 $this->unit->run($this->Bloqueo_model->eliminar($idhora),$valor_esperado ,$notas);
 echo $this->unit->report();
   }

}