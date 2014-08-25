<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class administrarFCE extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->registrarFCE();
	}

	function registrarFCE(){
		$data["titulo"] = 'Registrar FCE';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('agregarFCE.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}

	function eliminarFCE(){
		$data["titulo"] = 'Eliminar FCE';
		$data["url_base"]  = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('eliminarFCE.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}

	function actualizarFCE(){
		$data["titulo"] = 'Actualizar FCE';
		$data["url_base"]  = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('actualizarFicha.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}


}
?>