<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function index()
	{
		$data['main_view'] = 'course_view';
		$this->load->view('template', $data);
	}

}

/* End of file course.php */
/* Location: ./application/controllers/course.php */