<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservas extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Reservas_model');
    }
    
    public function index()
    {
        //$data["horas"] = $this->Horas_model->listarHoras();
       //  $this->Reservas_model->sendMail();
        $this->load->view('masterPage');
        $this->load->view('Reservas/Reservas');
        
    }
    
     public function NuevaReservas()
    {
        //$data["horas"] = $this->Horas_model->listarHoras();
        $this->load->view('masterPage');
        $this->load->view('Reservas/NuevaReservas');
    }
    
      public function VerReservas()
    {
     $id = $this->input->get('id');
    	$_SESSION["Ident"] = $id;
        $this->load->view('masterPage');
        $this->load->view('Reservas/EdicionReserva');
    }
    
    
    
    	public function reservaNueva()
	{
		$fecha = $this->input->post('Fecha');
		$cant = $this->input->post('Jugadores');
		$hora = $this->input->post('hora');
		$equipo = $this->input->post('Equipo');
		$idUser = $this->input->post('usuarios');
		$desc = $this->input->post('desc');
		
		$dia = $this->traducirDia(date('D', strtotime($fecha)));
		$data = $this->Reservas_model->insertar($fecha, $cant,$dia, $hora,$equipo,$idUser,$desc);
		
		 $this->Reservas_model->reservarxusuarioInsert();
		 $this->aceptarCambios();
		
  }
  
  	    public function traducirDia($dia)
      {
        switch ($dia)
        {
            case "Mon":
                return "Lunes";
                break;
            case "Tue":
                return "Martes";
                break;
            case "Wed":
                return "Miercoles";
                break;
            case "Thu":
                return "Jueves";
                break;
            case "Fri":
                return "Viernes";
                break;
            case "Sat":
                return "Sabado";
                break;
            case "Sun":
                return "Domingo";
                break;
                
        }
      }
    
    public function aceptarCambios()
    {
       
        
        return redirect('https://cancha-la-primavera-dilearmo.c9users.io/index.php/reservas', 'refresh');
        
    }
    
    
        	public function reservaEdicion()
	{
		$fecha = $this->input->post('Fecha');
		$cant = $this->input->post('Jugadores');
		$hora = $this->input->post('hora');
		$equipo = $this->input->post('Equipo');
		$idUser = $this->input->post('dropUsers');
	
		$desc = $this->input->post('desc');
			$comodinHoraReserva = $this->input->post('dropReservaComodin');
				$comodinUsuario = $this->input->post('dropUsuarioComodin');
				$_SESSION["hora"]=$comodinHoraReserva;
				$_SESSION["usu"] = $comodinUsuario;
		if(!isset($hora)) {
		    $hora = $comodinHoraReserva;
		}
		if(!isset($idUser)) {
		$idUser = $comodinUsuario;
		}
	
		$dia = $this->traducirDia(date('D', strtotime($fecha)));
		$data = $this->Reservas_model->editar($fecha, $cant,$dia, $hora,$equipo,$idUser,$desc);
		
		 
		 $this->aceptarCambios();
		
  }
  
  
  
}