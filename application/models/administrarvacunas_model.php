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
        
         function eliminarVacuna($data){
            $this->db->delete(
                    'vacunas',
                    array('id'=>$data['id']));
        }

}

?>

