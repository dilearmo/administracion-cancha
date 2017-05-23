<?php

	class Costos_model extends CI_Model{

		function __construct() {
            parent::__construct();
            $this->load->database();
		}
		
		function getCostos(){
	    	$consulta= $this->db->get('HoraReservable');
			if($consulta->num_rows() > 0) {
				return $consulta->result();
			} else {
				return false;
			}
		}
		
		
		function insertarCostos($costo,$dia,$hora) {
	     
	     $update = array('Precio'=>$costo);
         $this->db->where('NombreDia', $dia); 
         $this->db->where('Hora', $hora);
         
         $this->db->update('HoraReservable', $update);
		}
	}