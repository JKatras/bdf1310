<?php

class Site extends CI_controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('userModel');
	}
	
	public function index() {
		
		$data['userId'] = $this->userModel->getUsers();
		$this->load->view('header');
		$this->load->view('body', $data);
		$this->load->view('footer');
	}
	
}

?>