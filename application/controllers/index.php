<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$data["titulo"] = 'Index';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('index.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}
        
        //FUNCIÓN PARA SUBIR LA IMAGEN Y VALIDAR EL TÍTULO
        function do_upload() {
            $this->form_validation->set_rules('titulo', 'titulo', 'required|min_length[5]|max_length[10]|trim|xss_clean');
            $this->form_validation->set_message('required', 'El campo no puede ir vacío!');
            $this->form_validation->set_message('min_length', 'El campo debe tener al menos %s carácteres');
            $this->form_validation->set_message('max_length', 'El campo no puede tener más de %s carácteres');
            //SI EL FORMULARIO PASA LA VALIDACIÓN HACEMOS TODO LO QUE SIGUE
            if ($this->form_validation->run() == TRUE)
            {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2000';
            $config['max_width'] = '2024';
            $config['max_height'] = '2008';

            $this->load->library('upload', $config);
            //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
            if (!$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('index.php', $error);
            } else {
            //EN OTRO CASO SUBIMOS LA IMAGEN, CREAMOS LA MINIATURA Y HACEMOS
            //ENVÍAMOS LOS DATOS AL MODELO PARA HACER LA INSERCIÓN
                $file_info = $this->upload->data();
                //USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
                //ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
                $data = array('upload_data' => $this->upload->data());
                $titulo = $this->input->post('titulo');
                $imagen = $file_info['file_name'];
                $subir = $this->index_model->subir($titulo,$imagen);      
                $data['titulo'] = $titulo;
                $data['imagen'] = $imagen;
                
            }
            }else{
            //SI EL FORMULARIO NO SE VÁLIDA LO MOSTRAMOS DE NUEVO CON LOS ERRORES
                $this->index();
            }
        }
       
}
?>