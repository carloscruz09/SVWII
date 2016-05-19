<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Subject_model extends CI_Model
{
	

	public function add_subject($data)
	{
		$this->db->insert('materias',$data);
		if ($this->db->affected_rows() > 0){
			return true;
		}
		else {
			return false;
		}
	}

}