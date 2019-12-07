<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class alumnoM extends CI_Model
{
	
	public function get_alumno(){
		$this->db->select('a.id_alumno, a.nombres, a.apellidos, s.nombre_sexo, c.nombre_curso');
		$this->db->from('alumno a');
		$this->db->join('sexo s', 's.id_sexo = a.id_sexo');
		$this->db->join('curso c', 'c.id_curso = a.id_curso');
		$exe = $this->db->get();
		return $exe->result();
	}
}

 ?>