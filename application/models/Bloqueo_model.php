<?php

class Bloqueo_model extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function listarHoras()
    {
        $consulta = $this->db->query("CALL ObtenerBloqueos();");
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
        } else {
            return false;
        }
    }
    
    
    // function insertarCostos($costo,$dia,$hora) {
    
    //    $update = array('Precio'=>$costo);
    //       $this->db->where('NombreDia', $dia); 
    //       $this->db->where('Hora', $hora);
    
    //       $this->db->update('HoraReservable', $update);
    // }
    
    function eliminar($id)
    {
          try {
        $this->db->where('id', $id);
        $this->db->delete('Bloqueo');
        
        return "correcto";
          } catch (Exception $e) {
        return "incorrecto";
    }
    }
    
    function insertar($fecha, $dia, $hora)
    {
        try {
            
        $this->db->select('Id')->where("Hora", $hora)->where("NombreDia", $dia);
        
        $consulta = $this->db->get('HoraReservable');
        
        $idHora = $consulta->row()->Id;
        
        
        $data = array(
            'IdHoraReservable' => ($idHora),
            'Fecha' => $fecha
        );
        
        $this->db->insert('Bloqueo', $data);
        $this->cambiarEstadoRetos($fecha, $dia, $hora, 1);
        //    $consulta = $this->db->query("CALL InsertarBloqueos("+$fecha+","+$dia+","+$hora+");");
        return "correcto";
     } catch (E $e) {
        return "incorrecto";
    }
        
    }
    
    function bloqueables($dia,$fecha) {
     
    $sql='call Horas_reservables (?,?)';
    
    $array = array('dia' => $dia, 'fecha' => $fecha);
      $consulta =$this->db->query($sql, $array);
     
      
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
        } else {
            return false;
        }  
        
    }
    
           function cambiarEstadoRetos($fecha, $dia, $hora,$estado) {
       $sql='call EditarEstadoDesafio (?,?,?)';
    
       $array = array('fecha' => $fecha, 'hora' => $hora, 'estado' => $estado);
     $this->db->query($sql, $array);
             
    }
}