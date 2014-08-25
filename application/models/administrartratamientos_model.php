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
        
        function actualizarTratamiento($data){
            $this->db->where('id', $data['id']);
            $this->db->update(
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
        
        function obtenerTratamiento(){
            $query = $this->db->get('tratamientos');            
            if($query->num_rows() > 0){
                return $query;
            }
            else {
                return false;
            }
        }
        
        function buscarTratamiento($data){
            $this->db->where('id', $data['id']);
            $query = $this->db->get('tratamientos');            
            if($query->num_rows() > 0){
                return $query;
            }
            else {
                return false;
            }
        }

}

?>