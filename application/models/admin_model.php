<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Admin_model extends CI_Model
{
	

	public function get_admins()
	{
		//this->db->get('provincias_es') es equivalente a 
		//select * from provincias_es
		$num_admins = $this->db->count_all('administradores');
		return $num_admins;
		
		
	}

	public function get_teachers()
	{
		//this->db->get('provincias_es') es equivalente a 
		//select * from provincias_es
		$num_teachers = $this->db->count_all('profesores');
		return $num_teachers;
		
		
	}

	public function get_students()
	{
		//this->db->get('provincias_es') es equivalente a 
		//select * from provincias_es
		$num_students = $this->db->count_all('alumnos');
		return $num_students;
		
		
	}

	

	public function add_admin($data)
	{
		$this->db->insert('administradores',$data);
		if ($this->db->affected_rows() > 0){
			return true;
		}
		else {
			return false;
		}
	}
}