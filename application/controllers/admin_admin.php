<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('admin_admin_model');
		$this->load->database('default');
	}

	public function new_admin()
	{
		$this->_load_layout('admin/new_admin_view');
	}

	public function add_admin()
	{
		if ($this->input->is_ajax_request()) {
			$nombre = $this->input->post("nombre");
			$apaterno = $this->input->post("apaterno");
			$amaterno = $this->input->post("amaterno");
			$perfil = $this->input->post("perfil");
			$fnacimiento = $this->input->post("fnacimiento");
			$sexo = $this->input->post("sexo");
			$estado_civil = $this->input->post("estado_civil");
			$tel_casa = $this->input->post("tel_casa");
			$tel_celular = $this->input->post("tel_celular");
			$email = $this->input->post("email");
			$matricula = $this->input->post("matricula");
			$password = $this->input->post("password");
			$encrypt_pass = sha1($password);

			$data = array(
				"nombre" => $nombre,
				"a_paterno" => $apaterno,
				"a_materno" => $amaterno,
				"perfil" => $perfil,
				"fnacimiento" => $fnacimiento,
				"sexo" => $sexo,
				"estado_civil" => $estado_civil,
				"tel_casa" => $tel_casa,
				"tel_cel" => $tel_celular,
				"email" => $email,
				"usuario" => $matricula,
				"password" => $encrypt_pass
				);
			if ($this->admin_admin_model->add_admin($data) == true)
				echo "ok";

			else
				echo "no";
		}
		else
		{
			show_404();
		}
		
	}

	public function search_admin()
	{
		$this->_load_layout('admin/search_admin_view');
	}
	/** EJECUTAR PRUEBA ------------------------*/
	function mostrar(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("buscar");
			$datos = $this->admin_admin_model->mostrar($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function actualizar(){
		if ($this->input->is_ajax_request()) {
			$idsele = $this->input->post("idsele");
			$nombre = $this->input->post("nombre");
			$apaterno = $this->input->post("apaterno");
			$amaterno = $this->input->post("amaterno");
			$fnacimiento = $this->input->post("fnacimiento");
			$sexo = $this->input->post("sexo");
			$estado_civil = $this->input->post("estado_civil");
			$tel_casa = $this->input->post("tel_casa");
			$tel_celular = $this->input->post("tel_celular");
			$email = $this->input->post("email");
			$matricula = $this->input->post("usuario");
			$datos = array(
				"nombre" => $nombre,
				"a_paterno" => $apaterno,
				"a_materno" => $amaterno,
				"fnacimiento" => $fnacimiento,
				"sexo" => $sexo,
				"estado_civil" => $estado_civil,
				"tel_casa" => $tel_casa,
				"tel_cel" => $tel_celular,
				"email" => $email,
				"usuario" => $matricula
				);
			if($this->admin_admin_model->actualizar($idsele,$datos) == true)
				echo "Actualizado";
			else
				echo "No se pudo actualizar los datos";
			
		}
		else
		{
			show_404();
		}
	}

	function eliminar(){
		if ($this->input->is_ajax_request()) {
			$idsele = $this->input->post("id");
			if($this->admin_admin_model->eliminar($idsele) == true)
				echo "Registro eliminado";
			else
				echo "No se pudo eliminar los datos";
			
		}
		else
		{
			show_404();
		}
	}
	/** EJECUTAR PRUEBA -------------------------*/

	function _load_layout($template)
    {
    	$this->load->view('layout/headerAdmin');
    	$this->load->view($template);
    }
}
