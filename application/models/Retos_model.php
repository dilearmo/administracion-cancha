<?php

class Retos_model extends CI_Model{

	function __construct() {
        parent::__construct();
        $this->load->database();
	}
	
	function listarHorasDisponibles($dia, $fecha) {
	    $param = array($dia, $fecha);
	    $sql = "call Horas_disponibles_desafio(?, ?)";
        $consulta =	$this->db->query($sql, $param);
        if($consulta->num_rows() > 0) {
        	return $consulta->result();
        } else {
        	return false;
        }
    }
    
    function guardarReto($idUsuario, $cantidadJugadores, $nombreEquipo, $fecha, $idHora) {
        $data = array(
            'idUsuario'=>$idUsuario,
            'CantidadDeJugadores'=>$cantidadJugadores,
            'NombreEquipo'=>$nombreEquipo,
            'Fecha'=>$fecha,
            'idContrincante'=>null,
            'idHoraReservable'=>$idHora,
            'esta_Cancelado'=>0
        );
        $this->db->insert('Desafio',$data);
        return true;
    }

}
 
?>
