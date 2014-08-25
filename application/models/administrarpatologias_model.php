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
        
         function eliminarPatologia($data){
            $this->db->delete(
                    'patologias',
                    array('id'=>$data['id']));
        }

}

?>
