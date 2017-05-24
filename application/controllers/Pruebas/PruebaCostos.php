<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PruebaCostos extends CI_Controller {
    
    public function __construct() { 
        parent::__construct();
        $this->load->library('unit_test');
           $this->load->model('Costos_model');
           }
    
    public function index() { 
   $this->insertarCosto('564','Martes','8');
   
    }
    
 public function insertarCosto($costo,$dia,$hora) {
 $nombreDelTesst = "Modificacion de costos";
 $valor_esperado = "correcto";
 $notas = "Prueba de insesion de nuevo bloqueo, recibe tres parametros, el primero una fecha en formato A-M-D, un nombre del deia y un entero que es la hora de la Hora Reservable que necesitamos obtener, Retorna true si el registro a podido ser creado";
   
 $this->unit->run($this->Costos_model->insertarCostos($costo,$dia,$hora),$valor_esperado ,$notas);
 echo $this->unit->report();
    }
    


}