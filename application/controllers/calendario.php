<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendario extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$data["titulo"] = 'Calendario';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('calendario.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}
}
?>