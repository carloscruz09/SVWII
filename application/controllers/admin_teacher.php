<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_teacher extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('admin_teacher_model');
		$this->load->database('default');
		$this->load->library('grocery_crud');
	}

	public function new_teacher()
	{
		$this->_load_layout('admin/new_teacher_view');
	}

	public function add_teacher()
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
				"id_profesor" => $matricula,
				"password" => $encrypt_pass
				);
			if ($this->admin_teacher_model->add_docente($data) == true)
				echo "ok";

			else
				echo "no";
		}
		else
		{
			show_404();
		}
		
	}

	
	public function search_teacher()
	{
		try{

			/* Creamos el objeto */
			$crud = new grocery_CRUD();

			/* Seleccionamos el tema */
			$crud->set_theme('datatables');

			/* Seleccionmos el nombre de la tabla de nuestra base de datos*/
			$crud->set_table('profesores');

			/* Le asignamos un nombre */
			$crud->set_subject('Profesores');
			$crud->unset_add();

			/* Asignamos el idioma español */
			$crud->set_language('spanish');

			/* Aqui le decimos a grocery que estos campos son obligatorios */
			$crud->required_fields(
				'id_profesor',
				'password', 
				'nombre', 
				'email', 
				'a_paterno'
			);

			/* Aqui le indicamos que campos deseamos mostrar */
			$crud->columns(
				'id_profesor',
				'nombre',
				'a_paterno',
				'a_materno', 
				'sexo'
			);
			
			/* Generamos la tabla */
			$output = $crud->render();
			
			/* La cargamos en la vista situada en 
			/applications/views/productos/administracion.php */

			$this->_load_layout2($output);
			
		}catch(Exception $e){
			/* Si algo sale mal cachamos el error y lo mostramos */
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	/** FINAL Docentes */
	function _load_layout2($output = null)
    {
    	$this->load->view('layout/headerAdmin');
    	$this->load->view('admin/search_teacher_view', $output);
    }

    function _load_layout($template)
    {
    	$this->load->view('layout/headerAdmin');
    	$this->load->view($template);
    }

}
