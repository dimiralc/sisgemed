<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PerfilAdministrador extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$data["titulo"] = 'Perfil';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('administrador/header.php', $data);
		$this->load->view('administrador/navbar.php');
		$this->load->view('administrador/perfilAdministrador.php');
		$this->load->view('administrador/sidebar.php');
		$this->load->view('administrador/modal.php');
		$this->load->view('administrador/footer.php');
	}
}
?>