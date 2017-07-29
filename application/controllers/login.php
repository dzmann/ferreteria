<?php

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('login_model');
		$this->load->library('session');
		
	}

	public function index(){
		$data['mensaje']='';
		$this->load->view('index/header');
		$this->load->view('index/login', $data);
		$this->load->view('index/footer');
	}

	public function ingresar(){
		$user = $this->input->post('usuario');
		$pass = $this->input->post('contraseña');

		$result = $this->login_model->ingresar($user, $pass);

		if($result){
			$data['mensaje']='Ususario logueado correctamente';
			$this->load->view('index/header');
			$this->load->view('index/mensajes', $data);
			$this->load->view('index/footer');
		}else{
			$data['mensaje']='Usuario o contraseña incorrectos';
			$this->load->view('index/header');
			$this->load->view('index/login', $data);
			$this->load->view('index/footer');
		}

		//redirect(base_url());

	}

	function salir(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

}
