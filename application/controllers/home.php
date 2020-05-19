<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	function __construct() {
		parent::__construct(); 
	}

	public function index() {
		$this->load->view('sis_header');
		$this->load->view('sis_menu');
		$this->load->view('layout');
		$this->load->view('sis_footer');
	}
}
