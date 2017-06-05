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
 $notas = "Prueba de actualizacion de Costos, recibe los datos de cada una de las filas de las horas a edtitar y retorna true si losdatos pudieron ser actualizados";
   
 $this->unit->run($this->Costos_model->insertarCostos($costo,$dia,$hora),$valor_esperado ,$notas);
 echo $this->unit->report();
    }
    


}