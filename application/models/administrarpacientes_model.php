<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrarpacientes_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	function anadirPaciente($data){
		$this->db->insert(
			'pacientes', 
			array('rut'=>$data['run'], 
				'nombre'=>$data['nombre'], 
				'paterno'=>$data['paterno'],
				'materno'=>$data['materno'],
				'telefono'=>$data['telefono'],
				'direccion'=>$data['direccion'],
				'ecivil'=>$data['ecivil'],
				'genero'=>$data['genero'],
				'estudios'=>$data['estudios'],
				'enfermedades'=>$data['enfermedades']));
	}
        
        function actualizarPaciente($data){
            $this->db->where('rut', $data[run]);
            $this->db->update(
                    'pacientes',
                    array('rut'=>$data['run'], 
				'nombre'=>$data['nombre'], 
				'paterno'=>$data['paterno'],
				'materno'=>$data['materno'],
				'telefono'=>$data['telefono'],
				'direccion'=>$data['direccion'],
				'ecivil'=>$data['ecivil'],
				'genero'=>$data['genero'],
				'estudios'=>$data['estudios'],
				'enfermedades'=>$data['enfermedades']));
        }
        
         function eliminarPaciente($data){
            $this->db->delete(
                    'pacientes',
                    array('rut'=>$data['runInfo']));
        }
        
        function obtenerPacientes(){
            $query = $this->db->get('pacientes');            
            if($query->num_rows() > 0){
                return $query;
            }
            else {
                return false;
            }
        }
        
        function buscarPaciente($data){
            $this->db->where('rut', $data['run']);
            $query = $this->db->get('pacientes');            
            if($query->num_rows() > 0){
                return $query;
            }
            else {
                return false;
            }
        }
}

?>