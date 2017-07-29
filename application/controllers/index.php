<?php

class Index extends CI_Controller{


	public function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('articulos_model');
		$this->load->helper('url');
		$this->load->library('session');
	}


	public function index(){

		$config['base_url'] = base_url().'index/index';
		$config['total_rows'] = $this->articulos_model->num_articulos();
		$config['per_page'] = 6;
		$config['num_links'] = 5;
		$config['first_link'] = 'Primero';
		$config['last_link'] = 'Ultimo';
		$config['next_link'] = '>>';
		$config['prev_link'] = '<<';

		$config['cur_tag_open'] = '<b class="actual">';
		$config['cur_tag_close'] = '</b>';

		$config['full_tag_open'] = '<div id="paginacion">';
		$config['full_tag_close'] = '</div>';

		if($this->articulos_model->num_articulos()>12){
			echo "<br><br><span style='color: red; font-size:25px;'>Error fatal.</span><br><br>";
			echo "<span style='font-size:25px;'>No se puede mostrar la página.</span>";
		}else{

		$this->pagination->initialize($config);

		$data = array('articulos' => $this->articulos_model->get_articulos($config['per_page']),
						'paginacion' => $this->pagination->create_links());

		

		$this->load->view('index/header');
		$this->load->view('index/content', $data);
		$this->load->view('index/footer');

	}
	}

	public function nosotros(){
		$this->load->view('index/header');
		$this->load->view('index/nosotros');
		$this->load->view('index/footer');
	}

	public function mision(){
		$this->load->view('index/header');
		$this->load->view('index/mision');
		$this->load->view('index/footer');
	}

	public function presupuesto(){
		$this->load->view('index/header');
		$this->load->view('index/presupuesto');
		$this->load->view('index/footer');
	}


	public function nuevoArticulo(){
		if($this->session->userdata('usuario')){
			$this->load->view('index/header');
			$this->load->view('index/nuevoArticulo');	
			$this->load->view('index/footer');
		}else{
			redirect(base_url());
		}



	}


	public function guardarArticulo(){

		if($_POST){
			$nombreArchivo = $_FILES['subirImagen']['name'];
			
			$mi_imagen = 'subirImagen';
       		 $config['upload_path'] = "imagenes/";
      		  
      		  $config['file_name'] = $nombreArchivo;
     		   $config['allowed_types'] = "gif|jpg|jpeg|png";
      		  $config['max_size'] = "50000";
      		  $config['max_width'] = "2000";
     		   $config['max_height'] = "2000";

				$this->load->library('upload', $config);

     		   if (!$this->upload->do_upload($mi_imagen)) {
    		        //*** ocurrio un error
   		         $data['uploadError'] = $this->upload->display_errors();
    		        //echo $this->upload->display_errors();
   					echo "<br><br><span style='color: red; font-size:25px;'>Error fatal.</span><br><br>";
					echo "<span style='font-size:25px;'>El archivo cargado no es una imagen.</span>";
    		        return;
    	    }

      		 $data['uploadSuccess'] = $this->upload->data();

      		 $datos = [
      		 	"imagen" => $nombreArchivo,
      		 	"codigo" => $_POST['codigo'],
      		 	"precio" => $_POST['precio'],
      		 	"stock" => $_POST['stock'],
      		 	"descripcion" => $_POST['descripcion'],

      		 	];

      		 $this->articulos_model->guardar($datos);	

      		 $mensajes = [
      		 	"mensaje" => "<p style='color:blue; font-size:30px'>El artículo se guardó correctamente. </p>",
      		 ];
      		
      		 /*$this->load->view('index/header');
      		 $this->load->view('index/content', $mensajes);
      		 $this->load->view('index/footer');*/

      		 redirect(base_url());


		}


	}

	public function sucursales(){
		$this->load->view('index/header');
		$this->load->view('index/sucursales');
		$this->load->view('index/footer');
	}
	



}


?>











