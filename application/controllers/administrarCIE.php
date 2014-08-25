<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarCIE extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->agregarCIE();
	}

	function agregarCIE(){
		$data["titulo"] = 'Agregar CIE';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('agregarCIE.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}

	function eliminarCIE(){
		$data["titulo"] = 'Eliminar CIE';
		$data["url_base"]  = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('eliminarCIE.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}

}
?>