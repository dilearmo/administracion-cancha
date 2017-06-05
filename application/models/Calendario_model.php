<?php

	class Calendario_model extends CI_Model{

		function __construct() {
            parent::__construct();
            $this->load->database();
		}

        function BloqueosXFecha($fecha) {
     
    $sql='call BloqueosXfecha(?)';
    
    $array = array('fecha' => $fecha);
      $consulta =$this->db->query($sql, $array); 
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
            
        } else {
            return false;
        }  
        
    }
    
        function ReservasXFecha($fecha) {
     
    $sql='call Reservas_por_fecha(?)';
    
    $array = array('fecha' => $fecha);
      $consulta =$this->db->query($sql, $array); 
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
            
        } else {
            return false;
        }  
        
    }
}
?>
