<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarOME extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->agregarOME();
	}

	function agregarOME(){
		$data["titulo"] = 'Agregar Orden Medica';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('agregarOME.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}

	function eliminarOME(){
		$data["titulo"] = 'Eliminar Orden Medica';
		$data["url_base"]  = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('eliminarOME.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}

}
?>