<?php
class Student extends CI_Controller{

	function __construct(){
		parent::__construct();
		 $this->load->helper('url');
		 $this->load->library('session');

	}

	public function index(){
      $this->load->view("admin/pages/student/add");
	}
}




?>