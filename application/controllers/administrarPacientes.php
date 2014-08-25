<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarPacientes extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->helper('form');
                $this->load->model('administrarpacientes_model');
		
	}
	function index(){
		$this->registrarPaciente();
	}

	function registrarPaciente(){
		$data["titulo"] = 'Agregar Paciente';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');		
		$this->load->view('componentes/sidebar.php');
                $this->load->view('agregarPaciente.php');
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');

	}

	function administrarPaciente(){
                $data["titulo"] = 'Administrar Pacientes';
		$data["url_base"]  = $this->config->base_url();                
                $this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('administrarPaciente.php');                
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
                
	}

	function actualizarPaciente(){
		$data["titulo"] = 'Actualizar Paciente';
		$data["url_base"]  = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('actualizarDatos.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}

	function recibirDatos(){
		$data = array(
				'run' => $this->input->post('Rut'), 
				'nombre' => $this->input->post('Nombre'),
				'paterno' => $this->input->post('Paterno'),
				'materno' => $this->input->post('Materno'),
				'telefono' => $this->input->post('Telefono'),
				'direccion' => $this->input->post('Direccion'),
				'ecivil' => $this->input->post('ecivil'),
				'genero' => $this->input->post('genero'),
				'estudios' =>$this->input->post('estudios'),
				'enfermedades' =>$this->input->post('enfermedades')
			);

		switch( $_POST['btoPaciente'] ) {
                    case "Añadir Paciente":                       
                        $this->administrarpacientes_model->anadirPaciente($data);
                        $this->index();
                    break;                    
                    case "Eliminar Paciente":
                        $this->administrarpacientes_model->eliminarPaciente($data);
                        $this->administrarPaciente();                        
                    break;
                    case "Cancelar":
                        $this->index();
                    }
	}   
        
        function buscarPaciente(){
            
            $data["titulo"] = 'Administrar Pacientes';
            $data["url_base"]  = $this->config->base_url();                
            $this->load->view('componentes/header.php', $data);
            $this->load->view('componentes/navbar.php');
            $data = array ('run' => $this->input->post('Rut'));
            $data['pacientes'] = $this->administrarpacientes_model->buscarPaciente($data);
            $this->load->view('eliminarPaciente.php', $data);
            $this->load->view('componentes/sidebar.php');
            $this->load->view('componentes/modal.php');
            $this->load->view('componentes/footer.php');
            $data = array ('runInfo' =>  $this->input->post('infoRut'));
            switch( $_POST['btoPaciente'] ) {
                    case "Eliminar Paciente":  
                        $this->administrarpacientes_model->eliminarPaciente($data);
                        $this->administrarPaciente();
                    break;
                    case "Actualizar Paciente":                       
                        $this->administrarpacientes_model->actualizarPaciente($data);
                        $this->administrarPaciente();
                    break;
            }
        }
        
        


}
?>