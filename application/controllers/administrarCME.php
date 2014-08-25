<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarCME extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->agregarCME();
	}

	function agregarCME(){
		$data["titulo"] = 'Agregar Consulta Medica';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('agregarConsulta.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}

	function eliminarCME(){
		$data["titulo"] = 'Eliminar Consulta Medica';
		$data["url_base"]  = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('eliminarCME.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}

	function actualizarCME(){
		$data["titulo"] = 'Actualizar Consulta Medica';
		$data["url_base"]  = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('editarConsulta.php');    	
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}


}
?>