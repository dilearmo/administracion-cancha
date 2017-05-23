
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bloqueos extends CI_Controller {

	public function __construct()
	{
         parent::__construct();
           $this->load->helper('url');
           $this->load->helper('form');
           $this->load->model('Bloqueo_model');
    }
	 
	public function index()
	{
	
	$this->load->view('masterPage');
	$this->load->view('Bloqueos/horas');
    }
    
    	public function nuevo()
	{
	
	$this->load->view('masterPage');
	$this->load->view('Bloqueos/nuevoBloqueo');
    }
    
    	public function agregar()           
	{
	    
$newDateString = date_format(date_create_from_format('d-m-Y', $this->input->post('Fecha')), 'Y-m-d');

$dia = date('D', strtotime($newDateString));


    $data = array(
'Fecha' => $newDateString,
'Hora' => $this->input->post('hora'),
'NombreDia' => $dia,

);
 
 $data = $this->Bloqueo_model->insertar($data);

    redirect($_SERVER['https://cancha-la-primavera-dilearmo.c9users.io/index.php/Bloqueos/index'], 'refresh'); 
    }
    
    
    function SpanishDate($FechaStamp)
{
   $ano = date('Y',$FechaStamp);
   $mes = date('n',$FechaStamp);
   $dia = date('d',$FechaStamp);
   $diasemana = date('w',$FechaStamp);
   $diassemanaN= array("Domingo","Lunes","Martes","Miércoles",
                  "Jueves","Viernes","Sábado");
   $mesesN=array(1=>"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
             "Agosto","Septiembre","Octubre","Noviembre","Diciembre");
   return $diassemanaN[$diasemana].", $dia de ". $mesesN[$mes] ." de $ano";
}  
}



