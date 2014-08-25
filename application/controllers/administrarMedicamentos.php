<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarMedicamentos extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('administrarmedicamentos_model');
	}
	function index(){
		$data["titulo"] = 'Medicamentos';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
		$this->load->view('componentes/sidebar.php');
                $this->load->view('administrarMedicamentos.php');
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}

	function recibirDatos(){
		$data = array(
				'id' => $this->input->post('Id'), 
				'nombre' => $this->input->post('Nombre'),
				'componente' => $this->input->post('Componente'),
				'laboratorio' => $this->input->post('Laboratorio'),
				'descripcion' => $this->input->post('Descripcion')
			);
                switch( $_POST['btomedicamento'] ) {
                    case "Añadir Medicamento":                       
                        $this->administrarmedicamentos_model->anadirMedicamento($data);
                        $this->index();
                    break;
                    case "Quitar Medicamento":
                        $this->administrarmedicamentos_model->eliminarMedicamento($data);
                        $this->index();                        
                    break;
                    case "Cancelar":
                        $this->index();
                    }
	}
}
?>