<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarVacunas_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	function anadirVacuna($data){
		$this->db->insert(
			'vacunas', 
			array('id'=>$data['id'], 
				'nombre'=>$data['nombre'], 
				'zona'=>$data['zona'],
				'efectos'=>$data['efectos']));
	}
        
        function actualizarVacuna($data){
            $this->db->where('id', $data['id']);
            $this->db->update(
                    'vacunas',
                    array('id'=>$data['id'], 
				'nombre'=>$data['nombre'], 
				'sistema'=>$data['sistema'],
				'descripcion'=>$data['descripcion']));
        }
        
         function eliminarVacuna($data){
            $this->db->delete(
                    'vacunas',
                    array('id'=>$data['id']));
        }
        
        function obtenerVacuna(){
            $query = $this->db->get('vacunas');            
            if($query->num_rows() > 0){
                return $query;
            }
            else {
                return false;
            }
        }
        
        function buscarVacuna($data){
            $this->db->where('id', $data['id']);
            $query = $this->db->get('vacunas');            
            if($query->num_rows() > 0){
                return $query;
            }
            else {
                return false;
            }
        }

}

?>

