<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Horas extends CI_Controller {

	public function __construct()
	{
           parent::__construct();
           $this->load->helper('url');
           $this->load->helper('form');
           //$this->load->model('Horas_model');
    }
	 
	public function index()
	{
		//$data["horas"] = $this->Horas_model->listarHoras();
		$this->load->view('masterPage');
		$this->load->view('Horas/horas');
	}
}
