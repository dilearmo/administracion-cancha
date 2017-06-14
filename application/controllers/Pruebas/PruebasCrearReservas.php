<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'controllers/WSUsuario.php');

class PruebasCrearReservas extends CI_Controller {
    
    public function __construct() { 
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('Reservas_model');
    }
    
     	public function reservaNueva()
	{
		$fecha = '2017-06-14';
		$cant = 6;
		$hora = 20;
		$equipo = 'Prueba';
		$idUser = '57';
		$desc = 'esto es una prueba';
		$dia = 'Miercoles';
	
	   $test_name = 'Prueba de insercion de nueva reserva';
       $test_notes= 'Prueba si la reserva a sido creada con exito, devuelve true si ha tenido exito en la prueba.';
       $this->unit->run( $this->Reservas_model->insertar($fecha, $cant,$dia, $hora,$equipo,$idUser,$desc), true , $test_name , $test_notes);
       echo $this->unit->report();
	}
	
	 public function reservaEdicion()
	{
		$fecha = '2017-06-14';
		$cant = 6;
		$hora = 20;
		$equipo = 'Prueba';
		$idUser = '57';
		$desc = 'esto es una prueba';
		$dia = 'Miercoles';
		$data = $this->Reservas_model->editar($fecha, $cant,$dia, $hora,$equipo,$idUser,$desc);
		$test_name = 'Prueba de edicion de nueva reserva';
       $test_notes= 'Prueba si la reserva a sido editada con exito, devuelve true si ha tenido exito en la prueba.';
       $this->unit->run( $this->Reservas_model->editar($fecha, $cant,$dia, $hora,$equipo,$idUser,$desc), true , $test_name , $test_notes);
       echo $this->unit->report();
		
  }
    

 }