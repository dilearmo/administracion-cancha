<?php

class Reservas_model extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function listarReservas()
    {
        $consulta = $this->db->query("CALL ObtenerReservasVigentes();");
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
      
   
   $this->db->where('IdReserva', $id); 
   $this->db->update('Reserva', array('esta_cancelada' => 1));
   
        return "correcto";
          } catch (Exception $e) {
        return "incorrecto";
    }
    }
    
    function insertar($fecha, $cant,$dia, $hora,$equipo,$idUser,$desc)
    {
        try {
         $this->db->select('Id')->where("Hora", $hora)->where("NombreDia", $dia);
        
        $consulta = $this->db->get('HoraReservable');
        
        $idHora = $consulta->row()->Id;    
       
        $sql='call Reservar (?,?,?,?,?)';
    
       $array = array('IdHora' => $idHora, 'fecha' => $fecha, 'CantdeJugadores' => $cant, 'MiEquipo' => $equipo, 'Notas' => $desc);
      $consulta =$this->db->query($sql, $array);
      
      if(isset($idUser)) {
     $idReserva =  $this->reservarxUsuario($idUser,$fecha,$dia,$hora);
      }
     $this->cambiarEstadoRetos($fecha, $dia, $hora,'1');
    
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
    
        function UserXReserva($idReserva) {
     
    $sql='call UsuariosXReserva(?)';
    
    $array = array('idReserva' => $idReserva);
      $consulta =$this->db->query($sql, $array); 
     
      
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
            
        } else {
            return false;
        }  
        
    }
    
        function ReservaXid($idReserva) {
     
    $sql='call ObtenerReservasXid(?)';
    
    $array = array('id' => $idReserva);
      $consulta =$this->db->query($sql, $array);
     
      
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
        } else {
            return false;
        }  
        
    }
    
    
    function reservarxUsuario($idUser,$fecha,$dia,$hora) {
             
      $this->db->select('Reserva.IdReserva');    
     $this->db->from('Reserva');
     $this->db->join('HoraReservable', 'Reserva.IdHoraReservable = HoraReservable.id');
     $this->db->where('HoraReservable.Hora', $hora);
     $this->db->where('HoraReservable.NombreDia', $dia); 
     $this->db->where('Reserva.Fecha', $fecha); 
     $id = $this->db->get();
       
         $_SESSION["usuar"] = $idUser;
         $_SESSION["reserva"] = $id->row()->IdReserva;

    }
    
    
    function reservarxusuarioInsert() {
        
    $sql='call InsertarUsuarioreserva(?,?)';
    $array = array('User' =>$_SESSION["usuar"], 'Reserva' =>  $_SESSION["reserva"]);
    $this->db->query($sql, $array);
    }
    
        function cambiarEstadoRetos($fecha, $dia, $hora,$estado) {
       $sql='call EditarEstadoDesafio (?,?,?)';
    
       $array = array('fecha' => $fecha, 'hora' => $hora, 'estado' => $estado);
     $this->db->query($sql, $array);
             
    }
    
        function editar($fecha, $cant,$dia, $hora,$equipo,$idUser,$desc)
    {
        
       
      
      
        if(!isset($desc)) {  $desc = " No hay notas ";  }
       
        try {
         $this->db->select('Id')->where("Hora", $hora)->where("NombreDia", $dia);
        $consulta = $this->db->get('HoraReservable');
            $idHora = 0;
         	if(isset($consulta)) {
		   $idHora = $consulta->row()->Id;
		}
	
       	if($idHora == 0) {
		   			if(!isset($idUser)) {
		    $idHora = $_SESSION["usu"];
		}
      $data = array(
               'Fecha' => $fecha,
               'CantidadDeJugadores' => $cant,
              
                'Notas' => $desc,
                 'Mi_Equipo' => $equipo 
            );

            $this->db->where('idReserva', $_SESSION["Ident"]);
            $this->db->update('Reserva', $data); 
 
     
    
       print_r($idUser);
      die();
      if(isset($idUser)) {
        $data = array(
               'idUsuario' => $idUser
            );   
   
     
      $this->db->where('idReserva', $_SESSION["Ident"]); 
      $this->db->update('Reserva_Usuario', $data);
      }
     $this->cambiarEstadoRetos($fecha, $dia, $hora,'1');
    
        return "correcto";
		}
	
			if(!isset($idUser)) {
		    $idHora = $_SESSION["usu"];
		}
      $data = array(
               'Fecha' => $fecha,
               'CantidadDeJugadores' => $cant,
               'IdHoraReservable' => $idHora,
                'Notas' => $desc,
                 'Mi_Equipo' => $equipo 
            );

            $this->db->where('idReserva', $_SESSION["Ident"]);
            $this->db->update('Reserva', $data); 
 
    
    
      
       if(isset($idUser)) {
         $data = array(
               'idUsuario' => $idUser
             );  
     
       $this->db->where('idReserva', $_SESSION["Ident"]); 
       $this->db->update('Reserva_Usuario', $data);
       	
       }
      $this->cambiarEstadoRetos($fecha, $dia, $hora,'1');
    
        return "correcto";
     } catch (E $e) {
         return "incorrecto";
     }
        
    }
    
    
    function sendMail() {
$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'jeanpybarquero',
    'smtp_pass' => 'sharingan00',
    'mailtype'  => 'html', 
    'charset'   => 'iso-8859-1'
);
$this->load->library('email', $config);
$this->email->set_newline("\r\n");
$this->email->from('jeanpybarquero@gmail.com');
$this->email->to('jeanbarquero_@hotmail.com');
$this->email->subject('Email Test');
$this->email->message('Testing the email class.');



if ($this->email->send()) {
        echo 'Your email was sent, thanks chamil.';
    } else {
        show_error($this->email->print_debugger());
    }
    
    }
    
}