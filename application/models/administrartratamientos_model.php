<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarTratamientos_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	function anadirTratamiento($data){
		$this->db->insert(
			'tratamientos', 
			array('id'=>$data['id'], 
				'nombre'=>$data['nombre'], 
				'sistema'=>$data['sistema'],
				'descripcion'=>$data['descripcion']));
	}
        
         function eliminarTratamiento($data){
            $this->db->delete(
                    'tratamientos',
                    array('id'=>$data['id']));
        }

}

?>