<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

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
	public function __construct()
	{
           parent::__construct();
           $this->load->helper('url');
           $this->load->helper('form');
           $this->load->model('Usuario_model');
    }
	 
	public function index()
	{
		$data["todosUsuarios"] = $this->Usuario_model->listarUsuarios();
		$this->load->view('masterPage');
		$this->load->view('Usuario/Usuario', $data);
	}
	
	public function consultarUsuarios() {
	    $data["usuariosAdministradores"] = $this->Usuario_model->obtenerUsuariosAdmUsuConfNoConf("Es_administrador", 1);
	    $data["usuariosAplicacion"] = $this->Usuario_model->obtenerUsuariosAdmUsuConfNoConf("Es_administrador", 0);
        $data["usuariosConfiables"] = $this->Usuario_model->obtenerUsuariosAdmUsuConfNoConf("habilitado", 1);
	    $data["usuariosNoConfiables"] = $this->Usuario_model->obtenerUsuariosAdmUsuConfNoConf("habilitado", 0);
		$this->load->view('masterPage');
		$this->load->view('Usuario/consultarUsuario', $data); 
	}
	
	
	public function nuevoUsuario() {
		$this->load->view('masterPage');
		$this->load->view('Usuario/nuevoUsuario');
	}
	
	/*
	public function eliminar(){
		$id = $this->input->get('idUsuario');
		if(isset($id)){
			$this->Usuario_model->eliminarUsuario($id);	
		}
        // Redirecciona a la lista de usuarios
        redirect('usuarios');
	}
	*/
	
	/*
	*
	testeado por MJ
	*
	*/
    // Función que recibe los datos del usuario que se quiere agregar
    public function agregar() {

        // Recibe los datos que vienen por POST
        $nombre = $this->input->post('nombre');
        $apellidos = $this->input->post('apellidos');
        $nombreUsuario = $this->input->post('nombreUsuario');
        $contrasena = $this->input->post('contrasena');
        $telefono = $this->input->post('telefono');
        $correo = $this->input->post('correo');
        
        // Valida que todos los datos no estén vacíos
        if(!empty(trim($nombre)) && !empty(trim($apellidos)) && !empty(trim($correo))
            && !empty(trim($nombreUsuario)) && !empty(trim($contrasena)) && isset($telefono)) {
                //$Contrasena, $Nombre, $Apellidos, $Telefono, $NombreUsuario, $Correo ,$es_admin
            $this->Usuario_model->insertarUsuario($contrasena,$nombre,$apellidos, $telefono,$nombreUsuario, $correo, 1);
        }
        // Redirecciona a la lista de usuarios
        redirect('usuarios');
    }
    
    
    // Muestra los datos de un usuario específico para ser editado
    // El nombre de la función se debe a estética de la URL
    public function usuario() {
        // Recibe el nombre de usuario
        $idUsuario = $this->input->get('IdUsuario');
        if(isset($idUsuario)) {
            $data['datosUsuario'] = $this->Usuario_model->obtenerUsuarioPorId($idUsuario); // Obtiene los datos del usuario a modificar
            $this->load->view('masterPage');
            $this->load->view('Usuario/editarUsuario', $data);
        }
    }
    
	// Función que recibe los datos del usuario modificado
	public function editar() {
		$idUsuario = $this->input->post('idUsuario');
	    $nombre = $this->input->post('nombre');
        $apellidos = $this->input->post('apellidos');
        $contrasena = $this->input->post('contrasena');
        $telefono = $this->input->post('telefono');
        $correo = $this->input->post('correo');
	    
        // Valida que todos los datos no estén vacíos
        if(!empty(trim($nombre)) && !empty(trim($apellidos)) && !empty(trim($correo))
            && !empty(trim($idUsuario)) && !empty(trim($contrasena)) && isset($telefono)) {
                //$Contrasena, $Nombre, $Apellidos, $Telefono, $NombreUsuario, $Correo ,$es_admin
            $this->Usuario_model->actualizarUsuario($idUsuario ,$contrasena,$nombre,$apellidos, $telefono, $correo);
            redirect('usuarios');
        }
        // Redirecciona a la lista de usuarios

	} 
}