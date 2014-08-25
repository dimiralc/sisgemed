<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarExamenes_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	function anadirExamen($data){
		$this->db->insert(
			'examenes', 
			array('id'=>$data['id'], 
				'nombre'=>$data['nombre'], 
				'zona'=>$data['zona'],
				'efectos'=>$data['efectos']));
	}
        
        function actualizarExamen($data){
            $this->db->where('id', $data['id']);
            $this->db->update(
                    'examenes',
                    array('id'=>$data['id'], 
				'nombre'=>$data['nombre'], 
				'sistema'=>$data['sistema'],
				'descripcion'=>$data['descripcion']));
        }
        
         function eliminarExamen($data){
            $this->db->delete(
                    'examenes',
                    array('id'=>$data['id']));
        }
        
        function obtenerExamen(){
            $query = $this->db->get('examenes');            
            if($query->num_rows() > 0){
                return $query;
            }
            else {
                return false;
            }
        }
        
        function buscarExamen($data){
            $this->db->where('id', $data['id']);
            $query = $this->db->get('examenes');            
            if($query->num_rows() > 0){
                return $query;
            }
            else {
                return false;
            }
        }

}

?>