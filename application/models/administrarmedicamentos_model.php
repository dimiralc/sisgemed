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
        
        function actualizarMedicamento($data){
            $this->db->where('id', $data['id']);
            $this->db->update(
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
        
        function obtenerMedicamento(){
            $query = $this->db->get('medicamentos');            
            if($query->num_rows() > 0){
                return $query;
            }
            else {
                return false;
            }
        }
        
        function buscarMedicamento($data){
            $this->db->where('id', $data['id']);
            $query = $this->db->get('medicamentos');            
            if($query->num_rows() > 0){
                return $query;
            }
            else {
                return false;
            }
        }

}

?>