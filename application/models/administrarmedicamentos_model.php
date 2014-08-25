<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarMedicamentos_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	function anadirMedicamento($data){
		$this->db->insert(
			'medicamentos', 
			array('id'=>$data['id'], 
				'nombre'=>$data['nombre'], 
				'componente'=>$data['componente'],
				'laboratorio'=>$data['laboratorio'],
				'descripcion'=>$data['descripcion']));
	}
        
         function eliminarMedicamento($data){
            $this->db->delete(
                    'medicamentos',
                    array('id'=>$data['id']));
        }

}

?>