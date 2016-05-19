<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Login_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	

	public function login_administrador($username,$password)
	{
		$this->db->where('usuario',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('administradores');
		if($query->num_rows() == 1)
		{
			return $query->row();
		}else{
			$this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
			redirect(base_url().'login_admin','refresh');
		}
	}

	public function login_docentes($username,$password)
	{
		$this->db->where('id_profesor',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('profesores');
		if($query->num_rows() == 1)
		{
			return $query->row();
		}else{
			$this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
			redirect(base_url().'login_docente','refresh');
		}
	}

	public function login_alumnos($username,$password)
	{
		$this->db->where('matricula',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('alumnos');
		if($query->num_rows() == 1)
		{
			return $query->row();
		}else{
			$this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
			redirect(base_url().'login_alumno','refresh');
		}
	}
}
