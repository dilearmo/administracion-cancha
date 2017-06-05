<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Usuario_model');
	}
      
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('masterPage');
		$this->load->view('login');
	}
	
	public function guardarUsuarioEnSesion()
	{
		$nombreUsuario = $this->input->post('nombreUsuario');
		$datosUsuario = $this->Usuario_model->obtenerUsuarioPorNombreUsuario($nombreUsuario);
		
		if(isset($datosUsuario) && $datosUsuario != false) {
			$datos = array(
			        'NombreUsuario'  => $nombreUsuario,
			        'Nombre'     => $datosUsuario->Nombre,
			        'Apellidos' => $datosUsuario->Apellidos,
			        'Correo' => $datosUsuario->Correo,
					'Es_administrador' => $datosUsuario->Es_administrador
			);
			$this->session->set_userdata($datos);
			redirect('bloqueos');
		}
	}
	
	public function logout() {
		$this->session->sess_destroy();
		redirect('home');
	}
}
