<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Admin_student_model extends CI_Model
{
	

	public function add_alumn($data)
	{
		$this->db->insert('alumnos',$data);
		if ($this->db->affected_rows() > 0){
			return true;
		}
		else {
			return false;
		}
	}

}