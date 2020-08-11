<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financeiro extends CI_Controller {
	function __construct() {
		parent::__construct(); 
	}

	public function Contas() {
        $data = array (  
            'title' => 'Contas do Mês de '
        );

		$this->load->view('sis_header', $data);
		$this->load->view('sis_menu');
		$this->load->view('sis_financeiro', $data);
		$this->load->view('sis_footer');
	}

	public function NovaConta() {
		$data = array (  
			'title' => 'Nova Conta'
        );
        
		$this->load->view('sis_header', $data);
		$this->load->view('sis_menu');
		$this->load->view('sis_financeiro_form', $data);
		$this->load->view('sis_footer');
	}
}
