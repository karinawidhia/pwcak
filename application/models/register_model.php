<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function register_user(){

		$data=array(

			'id_user' => NULL,
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'city' => $this->input->post('city'),
			'bio' => $this->input->post('bio')
		);

		$this->db->insert('user',$data);

		if($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}
}
