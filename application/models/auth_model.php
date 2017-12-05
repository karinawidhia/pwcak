<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	
	public function authentication(){
        $email = $this->input->post('email');
        $role = $this->GetUser(['email'=>$email])->row('role');
        $id = $this->GetUser(['email'=>$email])->row('id_user');
        

        $query = $this->GetUser(['email'=>$email,'password'=>md5($password)]);
        if ($query->num_rows() > 0) {
            $data = [
                'logged_id'     => $id,
                'role'         => $role,
                'logged_in'     => TRUE
            ];
            $this->session->set_userdata( $data );
            return "TRUE";
        } 
         else {
            return "FALSE";
        }
    }

	public function GetUser($where)
    {
      return $this->db->where($where)->get('user');
    }

    public function GetAllData($table){
    return $this->db->get($table)->result();
}
}

/* End of file auth_model.php */
/* Location: ./application/models/auth_model.php */