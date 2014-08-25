<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarUsuarios extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->registrarUsuario();
	}

	function registrarUsuario(){
		$data["titulo"] = 'Agregar Usuario';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('agregarUsuario.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}

	function eliminarUsuario(){
		$data["titulo"] = 'Eliminar Usuario';
		$data["url_base"]  = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('eliminarUsuario.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}

	function actualizarUsuario(){
		$data["titulo"] = 'Actualizar Usuario';
		$data["url_base"]  = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('actualizarUsuario.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}


}
?>