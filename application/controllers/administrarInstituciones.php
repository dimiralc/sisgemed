<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarInstituciones extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->agregarInstitucion();
	}

	function agregarInstitucion(){
		$data["titulo"] = 'Agregar Institucion';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('agregarInstitucion.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}

	function eliminarInstitucion(){
		$data["titulo"] = 'Eliminar Institucion';
		$data["url_base"]  = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('eliminarInstitucion.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}

	function actualizarInstitucion(){
		$data["titulo"] = 'Actualizar Institucion';
		$data["url_base"]  = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('actualizarInstitucion.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}


}
?>