<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumnoC extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('alumnoM');
	}
	
	public function index()
	{
		$data= array('title' =>'Alumnos || Ajax');
		$this->load->view('template/header',$data);
		$this->load->view('alumnoV');
		$this->load->view('template/footer');
	}

	public function get_alumno(){
		$respuesta = $this->alumnoM->get_alumno();
		echo json_encode($respuesta);
	}
}
