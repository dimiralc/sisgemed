<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarAlergia extends CI_Controller {
	function __construct(){
		parent::__construct();
                $this->load->helper('form');
                $this->load->model('administraralergias_model');
	}
	function index(){
		$data["titulo"] = 'Alergias';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('administrarAlergia.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}
        function recibirDatos(){    
             $data = array(
				'id' => $this->input->post('Id'), 
				'nombre' => $this->input->post('Nombre'),
				'alergeno' => $this->input->post('Alergeno'),
				'sintomatologia' => $this->input->post('Sintomatologia')
			);
            switch( $_POST['btoalergia'] ) {
                    case "Añadir Alergia":                       
                        $this->administraralergias_model->anadirAlergia($data);
                        $this->index();
                    break;
                    case "Quitar Alergia":
                        $this->administraralergias_model->eliminarAlergia($data);
                        $this->index();                        
                    break;
                    case "Cancelar":
                        $this->index();
                    }

		
        }
        
        
        
        
}
?>