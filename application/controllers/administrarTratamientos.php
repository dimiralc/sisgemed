<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarTratamientos extends CI_Controller {
	function __construct(){
		parent::__construct();
                $this->load->helper('form');
                $this->load->model('administrartratamientos_model');
	}
	function index(){
		$data["titulo"] = 'Tratamientos';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('administrarTratamientos.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}
        
        function recibirDatos(){
		$data = array(
				'id' => $this->input->post('Id'), 
				'nombre' => $this->input->post('Nombre'),
				'sistema' => $this->input->post('Sistema'),				
				'descripcion' => $this->input->post('Descripcion')
			);
                switch( $_POST['btotratamiento'] ) {
                    case "Añadir Tratamiento":                       
                        $this->administrartratamientos_model->anadirTratamiento($data);
                        $this->index();
                    break;
                    case "Actualizar Tratamiento":                       
                        $this->administrartratamientos_model->actualizarTratamiento($data);
                        $this->index();
                    break;
                    case "Quitar Tratamiento":
                        $this->administrartratamientos_model->eliminarTratamiento($data);
                        $this->index();                        
                    break;
                    case "Cancelar":
                        $this->index();
                    }
	}
}
?>