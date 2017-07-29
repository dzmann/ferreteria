<?php

class Articulos_model extends CI_Model{
	public $imagen;
	public $codigo;
	public $precio;
	public $stock;
	public $descripcion;

	public function __construct(){
		parent::__construct();
	}

	public function num_articulos(){
		return $this->db->get('articulos')->num_rows();
	}

	public function get_articulos($per_page){
		$datos = $this->db->get('articulos', $per_page, $this->uri->segment(3));
		return $datos->result_array();
	}

	public function guardar($articulo){
		$this->imagen = $articulo['imagen'];
		$this->codigo = $articulo['codigo'];
		$this->precio = $articulo['precio'];
		$this->stock = $articulo['stock'];
		$this->descripcion = $articulo['descripcion'];

		$this->db->insert('articulos', $this);
	}
}