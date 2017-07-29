<?php

class Login_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function ingresar($user, $pass){
		$this->db->select('*');
		$this->db->from('login');
		$array = ['user' => $user, 'password' => $pass];
		$this->db->where($array);
		$query = $this->db->get();
		$result = $query->result();
		
		if($result){
			$sesion_admin=['usuario' => $result[0]->user];
			$this->session->set_userdata($sesion_admin);
			return true;

		}else{
			return false;
		}


	}	
}