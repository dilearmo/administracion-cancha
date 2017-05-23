<?php

	class Bloqueo_model extends CI_Model{

		function __construct() {
            parent::__construct();
            $this->load->database();
		}
		
		function listarHoras(){
	    	$consulta = $this->db->query("CALL ObtenerBloqueos();");
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
		
	    function eliminar($id) {
	     
	    $this -> db -> where('id', $id);
        $this -> db -> delete('Bloqueo');
		}
		
		  function insertar($data) {
	     
	   $this->db->insert('students', $data);
		}
	}