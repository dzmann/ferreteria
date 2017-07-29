<?php

class Inicio extends CI_Controller{


	public function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('articulos_model');
		$this->load->helper('url');
	}


	public function index(){

		$config['base_url'] = base_url().'inicio/index/';
		$config['total_rows'] = $this->articulos_model->num_articulos();
		$config['per_page'] = 6;
		$config['num_links'] = 5;
		$config['first_link'] = 'Primero';
		$config['last_link'] = 'Ultimo';
		$config['next_link'] = 'Siguiente';
		$config['prev_link'] = 'Anterior';

		$config['cur_tag_open'] = '<b class="actual">';
		$config['cur_tag_close'] = '</b>';

		$config['full_tag_open'] = '<div id="paginacion">';
		$config['full_tag_close'] = '</div>';

		$this->pagination->initialize($config);

		$data = array('articulos' => $this->articulos_model->get_articulos($config['per_page']),
						'paginacion' => $this->pagination->create_links());

		

		//$this->load->view('index/header');
		$this->load->view('index/content', $data);



	}



}


?>











