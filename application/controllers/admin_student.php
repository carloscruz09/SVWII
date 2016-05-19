<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_student extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('admin_student_model');
		$this->load->database('default');
		$this->load->library('grocery_crud');
	}

	/** INICIO Alumnos -------------------------------------------------------------------------------------------*/
	public function new_student()
	{
		$this->_load_layout('admin/new_student_view');
	}

	public function add_student()
	{
		if ($this->input->is_ajax_request()) {
			$nombre = $this->input->post("nombre");
			$apaterno = $this->input->post("apaterno");
			$amaterno = $this->input->post("amaterno");
			$sexo = $this->input->post("sexo");
			$perfil = $this->input->post("perfil");
			$fnacimiento = $this->input->post("fnacimiento");
			$curp = $this->input->post("curp");			
			$finscripcion = $this->input->post("finscripcion");
			$status = $this->input->post("status");
			$grupo = $this->input->post("grupo");
			$tel_casa = $this->input->post("tel_casa");
			$tel_celular = $this->input->post("tel_celular");
			$direccion = $this->input->post("direccion");
			$email = $this->input->post("email");
			$matricula = $this->input->post("matricula");
			$password = $this->input->post("password");
			$encrypt_pass = sha1($password);
			$tutor_nombre = $this->input->post("tutor_nombre");
			$tutor_apaterno = $this->input->post("tutor_apaterno");
			$tutor_amaterno = $this->input->post("tutor_amaterno");
			$tutor_sexo = $this->input->post("tutor_sexo");
			$tutor_direccion = $this->input->post("tutor_direccion");
			$tutor_telefono = $this->input->post("tutor_telefono");
			$tutor_empresa = $this->input->post("tutor_empresa");

			$data = array(
				"nombre" => $nombre,
				"a_paterno" => $apaterno,
				"a_materno" => $amaterno,
				"perfil" => $perfil,
				"fnacimiento" => $fnacimiento,
				"curp" => $curp,
				"sexo" => $sexo,
				"finscripcion" => $finscripcion,
				"status" => $status,
				"grupo" => $grupo,
				"tel_casa" => $tel_casa,
				"tel_celular" => $tel_celular,
				"direccion" => $direccion,
				"email" => $email,
				"matricula" => $matricula,
				"password" => $encrypt_pass,
				"tutor_nombre" => $tutor_nombre,
				"tutor_apaterno" => $tutor_apaterno,
				"tutor_amaterno" => $tutor_amaterno,
				"tutor_sexo" => $tutor_sexo,
				"tutor_direccion" => $tutor_direccion,
				"tutor_telefono" => $tutor_telefono,
				"tutor_empresa" => $tutor_empresa
				);
			if ($this->admin_student_model->add_alumn($data) == true)
				echo "ok";

			else
				echo "no";
		}
		else
		{
			show_404();
		}
	}

	public function search_student()
	{
		try{

			/* Creamos el objeto */
			$crud = new grocery_CRUD();

			/* Seleccionamos el tema */
			$crud->set_theme('datatables');

			/* Seleccionmos el nombre de la tabla de nuestra base de datos*/
			$crud->set_table('alumnos');

			/* Le asignamos un nombre */
			$crud->set_subject('Alumnos');
			

			/* Asignamos el idioma español */
			$crud->set_language('spanish');

			/* Aqui le decimos a grocery que estos campos son obligatorios */
			$crud->required_fields(
				'matricula',
				'password', 
				'nombre', 
				'email', 
				'a_paterno'
			);

			/* Aqui le indicamos que campos deseamos mostrar */
			$crud->columns(
				'matricula',
				'nombre',
				'a_paterno',
				'a_materno', 
				'grupo'
			);

			 $crud->callback_edit_field('sexo',array($this,'edit_field_callback_1'));

			/* Aqui le indicamos que campos deseamos editar */
			 $crud->edit_fields('matricula','nombre','a_paterno','a_materno','sexo','fnacimiento',
			 	'direccion','tel_casa','tel_celular','email','curp','finscripcion','status','grupo',
			 	'tutor_nombre','tutor_apaterno','tutor_amaterno','tutor_sexo','tutor_direccion',
			 	'tutor_telefono','tutor_empresa');

			


			
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
	/** FINAL Alumnos */
	function edit_field_callback_1($value, $primary_key)
	{
    return '<select name="sexo"  style="width:462px">
    			<option value="'.$value.'">'.$value.'</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
             </select> ';
	}
	
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
