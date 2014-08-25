<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarExamen extends CI_Controller {
	function __construct(){
		parent::__construct();
                $this->load->helper('form');
                $this->load->model('administrarexamenes_model');
	}
	function index(){
		$data["titulo"] = 'Exámenes';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('administrarExamenes.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}
        
         function recibirDatos(){
		$data = array(
				'id' => $this->input->post('Id'), 
				'nombre' => $this->input->post('Nombre'),
				'zona' => $this->input->post('Zona'),				
				'efectos' => $this->input->post('Efectos')
			);

		switch( $_POST['btoexamenes'] ) {
                    case "Añadir Examen":                       
                        $this->administrarexamenes_model->anadirExamen($data);
                        $this->index();
                    break;
                    case "Actualizar Examen":                       
                        $this->administrarexamenes_model->actualizarExamen($data);
                        $this->index();
                    break;
                    case "Quitar Examen":
                        $this->administrarexamenes_model->eliminarExamen($data);
                        $this->index();                        
                    break;
                    case "Buscar Examen":
                        $this->administrarexamenes_model->buscarExamen($data);
                        $this->index();                        
                    break;
                    case "Cancelar":
                        $this->index();
                    }
	}
}
?>