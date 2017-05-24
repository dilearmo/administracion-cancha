<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bloqueos extends CI_Controller
  {
    
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
        
        $newDateString = $this->input->post('Fecha');
        $dia = $this->traducirDia(date('D', strtotime($newDateString)));
        
        $Hora = $this->input->post('hora');
        
        
        
        $this->Bloqueo_model->insertar($newDateString, $dia, $Hora);
        
        redirect('https://cancha-la-primavera-dilearmo.c9users.io/index.php/bloqueos');
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
    
    
  }


