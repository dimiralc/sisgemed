<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarPatologias_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	function anadirPatologia($data){
		$this->db->insert(
			'patologias', 
			array('id'=>$data['id'], 
				'nombre'=>$data['nombre'], 
				'sistema'=>$data['sistema'],
				'sintomatologia'=>$data['sintomatologia']));
	}
        
        function actualizarPatologia($data){
            $this->db->where('id', $data['id']);
            $this->db->update(
                    'patologias',
                    array('id'=>$data['id'], 
				'nombre'=>$data['nombre'], 
				'sistema'=>$data['sistema'],
				'sintomatologia'=>$data['sintomatologia']));
        }
        
         function eliminarPatologia($data){
            $this->db->delete(
                    'patologias',
                    array('id'=>$data['id']));
        }
        
        function obtenerPatologia(){
            $query = $this->db->get('patologias');            
            if($query->num_rows() > 0){
                return $query;
            }
            else {
                return false;
            }
        }
        
        function buscarPatologia($data){
            $this->db->where('id', $data['id']);
            $query = $this->db->get('patologias');            
            if($query->num_rows() > 0){
                return $query;
            }
            else {
                return false;
            }
        }

}

?>
