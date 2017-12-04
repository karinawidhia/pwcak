<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function index()
	{
		$this->load->view('course_view');
	}

}

/* End of file course.php */
/* Location: ./application/controllers/course.php */