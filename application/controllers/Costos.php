<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Costos extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Costos_model');
    }
    
    public function index()
    {
        //$data["horas"] = $this->Horas_model->listarHoras();
        $this->load->view('masterPage');
        $this->load->view('Costos/Costos');
    }
    
    public function aceptarCambios()
    {
        $contador        = 1;
        $contadorHora    = 6;
        $dia             = "";
        $completed_todos = $this->input->post();
        foreach ($completed_todos as $todo_id)
        {
            
            if ($contadorHora > 23)
            {
                $contadorHora = 6;
            }
            
            switch ($contador)
            {
                case $contador <= 18;
                    $dia = "Lunes";
                    break;
                case $contador <= 36;
                    $dia = "Martes";
                    break;
                case $contador <= 54;
                    $dia = "Miercoles";
                    break;
                case $contador <= 74;
                    $dia = "Jueves";
                    break;
                case $contador <= 90;
                    $dia = "Viernes";
                    break;
                case $contador <= 108;
                    $dia = "Sabado";
                    break;
                case $contador <= 126;
                    $dia = "Domingo";
                    break;
            }
            
            if (isset($todo_id))
            {
                $this->Costos_model->insertarCostos($todo_id, $dia, $contadorHora);
                $contador++;
                $contadorHora++;
            }
            else
            {
                $this->Costos_model->insertarCostos(14000, $dia, $contadorHora);
                $contador++;
                $contadorHora++;
            }
            
        }
        
        return redirect('https://cancha-la-primavera-dilearmo.c9users.io/index.php/Costos/index', 'refresh');
        
    }
}

