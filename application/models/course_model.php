<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function GetListCourses($keyword){
		// courses/search course course list
		if (empty($keyword)) {
		return $this->db
			->limit(15,0)
			// ->order_by() 
            ->get('course_title')
            ->result();
		}
		else{
		return $this->db
			->where($keyword)
			->limit(15,0) 
			// ->order_by()
            ->get('course_title')
            ->result();
		}
	}

	public function GetSubject(){
		return $this->db->where('type', 'subject')->get('config')->result();
	}	

}

/* End of file course_model.php */
/* Location: ./application/models/course_model.php */