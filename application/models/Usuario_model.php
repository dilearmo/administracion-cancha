<?php

	class Usuario_model extends CI_Model{

		function __construct() {
            parent::__construct();
            $this->load->database();
		}
		
		function listarUsuarios(){
		$this->db->from("Usuario");
          $this->db->order_by("Nombre", "asc");
          $consulta = $this->db->get(); 
			
			if($consulta->num_rows() > 0) {
				return $consulta->result();
			} else {
				return false;
			}
		}
		
		
		 function eliminarUsuario($IdUsuario)
	    {
	        $response = $this->db->delete('Usuario',array('IdUsuario'=>$IdUsuario));
	        if($response)
	        {
	            return true;
	        }
	        else
	        {
	            return false;
	        }
	    }
	    
		function actualizarHabilitar($NombreUsuario, $habilitado)
		{
			$this->db->set('habilitado', $habilitado); //value that used to update column  
			$this->db->where('NombreUsuario', $NombreUsuario); //which row want to upgrade  
			return $this->db->update('Usuario');
		}
		
		function actualizarUsuario($idUsuario ,$contrasena,$nombre,$apellidos, $telefono, $correo)
		{
			$this->db->set('Contrasena', $contrasena); //value that used to update column  
			$this->db->set('Nombre', $nombre); //value that used to update column  
			$this->db->set('Apellidos', $apellidos); //value that used to update column  
			$this->db->set('Telefono', $telefono); //value that used to update column  
			$this->db->set('Correo', $correo); //value that used to update column 
			$this->db->where('IdUsuario', $idUsuario); //which row want to upgrade  
			return $this->db->update('Usuario');
		}

		function existeNombreUsuario($nombre) {
		   $this->db->where("NombreUsuario", $nombre);
		   $query= $this->db->get('Usuario');
			if($query->num_rows() > 0) {
				return true;
			} else {
				return false;
			}
		}
		
		function existeCorreo($correo) {
		   $this->db->where("Correo", $correo);
		   $query= $this->db->get('Usuario');
			if($query->num_rows() > 0) {
				return true;
			} else {
				return false;
			}
		}
		
		function usuarioHabilitado($nombreUsuario) {
			$this->db->select('habilitado');
			$this->db->where("NombreUsuario", $nombreUsuario);
			$query= $this->db->get('Usuario');
			if($query->num_rows() > 0) {
				if($query->result()[0]->habilitado == 1) {
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		}
		
	function esAdmin($nombreUsuario) {
		$this->db->select('Es_administrador');
		$this->db->where("NombreUsuario", $nombreUsuario);
		$query= $this->db->get('Usuario');
		if($query->num_rows() > 0) {
			if($query->result()[0]->Es_administrador == 1) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
		
	function existeNombreUsuarioycorreo($nombre, $correo) {
	  //$this->db->where("NombreUsuario", $nombre);
	  //$this->db->where("Correo", $correo);
	  $this->db->where("NombreUsuario", $nombre);
	
   	  $this->db->or_where("Correo", $correo);
		 // $where = "Correo ='"+$correo+"' OR NombreUsuario='"+$nombre+"'";
		
		//$this->db->where($where);
  
      $query= $this->db->get('Usuario');
		if($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
		
		function obtenerUsuarioPorNombreUsuario($nombreUsuario) {
			$this->db->where("NombreUsuario", $nombreUsuario);
			$consulta = $this->db->get('Usuario');
			if($consulta->num_rows() > 0) {
				return $consulta->result()[0];
			} else {
				return false;
			}
		}
		
		function obtenerUsuarioPorId($idUsuario) {
			$this->db->where("IdUsuario", $idUsuario);
			$consulta = $this->db->get('Usuario');
			if($consulta->num_rows() > 0) {
				return $consulta->result()[0];
			} else {
				return false;
			}
		}
		
		function obtenerUsuarios() {
		$consulta = $this->db->get('Usuario');
		if($consulta->num_rows() > 0) 
		{
				
			return $consulta->result()[0];
		
		} else {
			return false;
			}
		}
		
		// obtiene los usuarios administradores si el parametro es 'Es_administrador' y 1
		//Obtiene los usuarios de la aplicacion si el parametro es 'Es_administrador' y 0
		//Obtiene los usuarios confiables si el parametro es 'habilitado' y 1
		//Obtiene los usuarios no confiables si el parametro es 'habilitado' y 0
		function obtenerUsuariosAdmUsuConfNoConf($nombreColumna, $param) {
	      $this->db->where($nombreColumna, $param);
		  $this->db->from("Usuario");
          $this->db->order_by("Nombre", "asc");
          $consulta = $this->db->get(); 
			
			if($consulta->num_rows() > 0) {
				return $consulta->result();
			} else {
				return false;
			}
		}
		
		function obtnerRetosporUsuario($idUsuario) {
		$this->db->where('idUsuario', $idUsuario);
		$this->db->from("Desafio");
		$this->db->join('HoraReservable', 'Desafio.IdHoraReservable = HoraReservable.Id');
    	$consulta = $this->db->get(); 
    	
		if($consulta->num_rows() > 0) 
		{
			return $consulta->result();
		
		} else {
			return false;
			}
		}
		
	    function insertarUsuario($Contrasena, $Nombre, $Apellidos, $Telefono, $NombreUsuario, $Correo ,$es_admin) {
	    	//ACUERDESE AGREGAR LA VARIABLE, Y ME MANDA UN MENSAJE CUANDO YA ESTE HECHO PARA YO CAMBIAR MIS METODOS.
			if($this->existeNombreUsuarioycorreo($NombreUsuario, $Correo) == false) {
				$data = array(
			          'Contrasena'=>md5($Contrasena),
			          'Nombre'=>$Nombre,
			          'Apellidos'=>$Apellidos,
			          'Telefono'=>$Telefono,
			          'NombreUsuario'=>$NombreUsuario,
			          'Correo'=>$Correo,
			          'habilitado'=>1,
			          'Es_administrador'=> $es_admin
		         );
				 $this->db->insert('Usuario',$data);
				 return true;
            } else {
				return false;
            }
       }
 }
         //https://cancha-la-primavera-dilearmo.c9users.io/index.php/WSUsuario/RegistroUsuario?Contrasena=Contrasena&Nombre=Nombre&Apellidos=Apellidos&Telefono=123456789&NombreUsuario=NombreUsuario&Correo=jeanpy@hotmail.com

?>
