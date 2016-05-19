<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_teacher_model extends CI_Model {

	public function add_docente($data)
	{
		$this->db->insert('profesores',$data);
		if ($this->db->affected_rows() > 0){
			return true;
		}
		else {
			return false;
		}
	}

}