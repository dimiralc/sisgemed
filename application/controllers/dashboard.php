<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->load->view('administrador/header.php');
		$this->load->view('administrador/navbar.php');
                $this->load->view('administrador/sidebar.php');
		$this->load->view('administrador/dashboard.php');		
		$this->load->view('administrador/modal.php');
		$this->load->view('administrador/footer.php');
	}
}
?>