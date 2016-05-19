<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Admin_admin_model extends CI_Model
{
	

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

	function mostrar($valor){
		$this->db->like("nombre",$valor);
		$this->db->or_like('usuario', $valor);
		$consulta = $this->db->get("administradores");
		return $consulta->result();
	}

	function actualizar($id,$data){
		$this->db->where('id_administrador', $id);
		$this->db->update('administradores', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar($id){
		$this->db->where('id_administrador', $id);
		$this->db->delete('administradores'); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
}