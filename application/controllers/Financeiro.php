<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financeiro extends CI_Controller {
	function __construct() {
		parent::__construct(); 
	}

	public function ContasPagar() {
        $data = array (  
            'title' => 'Contas do Mês de '
        );

		$this->load->view('sis_header', $data);
		$this->load->view('sis_menu');
		$this->load->view('sis_contapagar', $data);
		$this->load->view('sis_footer');
	}

	public function ContasReceber() {
        $data = array (  
            'title' => 'Contas do Mês de '
        );

		$this->load->view('sis_header', $data);
		$this->load->view('sis_menu');
		$this->load->view('sis_contareceber', $data);
		$this->load->view('sis_footer');
	}

	public function NovaContaPagar() {
		$data = array (  
			'title' => 'A Pagar'
        );
        
		$this->load->view('sis_header', $data);
		$this->load->view('sis_menu');
		$this->load->view('sis_contapagar_form', $data);
		$this->load->view('sis_footer');
	}

	public function NovaContaReceber() {
		$data = array (  
			'title' => 'A Receber'
        );
        
		$this->load->view('sis_header', $data);
		$this->load->view('sis_menu');
		$this->load->view('sis_financeiro_form', $data);
		$this->load->view('sis_footer');
	}
}
