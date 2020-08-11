<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	function __construct() {
		parent::__construct(); 
	}

	public function Cadastrados() {
        $data = array (  
                        'title' => 'Usuários do Sistema'
                     );
		$this->load->view('sis_header', $data);
		$this->load->view('sis_menu');
		$this->load->view('sis_usuarios', $data);
		$this->load->view('sis_footer');
	}

	public function NovoUsuario() {
		$data = array (  
			'title' => 'Novo Usuário'
		 );
		$this->load->view('sis_header', $data);
		$this->load->view('sis_menu');
		$this->load->view('sis_usuario_form', $data);
		$this->load->view('sis_footer');
	}
}
