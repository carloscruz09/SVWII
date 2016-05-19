<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_subject extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('subject_model');
		$this->load->database('default');
		$this->load->library('grocery_crud');
	}

	public function new_subject()
	{
		$this->_load_layout('admin/new_subject_view');
	}

	public function add_subject()
	{
		if ($this->input->is_ajax_request()) {
			$cve_materia = $this->input->post("cve_materia");
			$materia = $this->input->post("materia");
			$tipo_materia = $this->input->post("tipo_materia");
			$cve_profesor = $this->input->post("cve_profesor");			
			
			$data = array(
				"cve_materia" => $cve_materia,
				"materia" => $materia,
				"tipo_materia" => $tipo_materia,
				"cve_profesor" => $cve_profesor
				);
			if ($this->subject_model->add_subject($data) == true)
				echo "ok";

			else
				echo "no";
		}
		else
		{
			show_404();
		}
		
	}

	
	public function search_subject()
	{
		try{

			/* Creamos el objeto */
			$crud = new grocery_CRUD();

			/* Seleccionamos el tema */
			$crud->set_theme('datatables');

			/* Seleccionmos el nombre de la tabla de nuestra base de datos*/
			$crud->set_table('materias');

			/* Le asignamos un nombre */
			$crud->set_subject('Materias');
			$crud->unset_add();

			/* Asignamos el idioma español */
			$crud->set_language('spanish');

			/* Aqui le decimos a grocery que estos campos son obligatorios */
			$crud->required_fields(
				'id_materia',
				'cve_materia', 
				'materia', 
				'tipo_materia', 
				'cve_profesor'
			);

			/* Aqui le indicamos que campos deseamos mostrar */
			$crud->columns(
				'cve_materia',
				'materia',
				'tipo_materia',
				'cve_profesor'
			);
			
			/* Generamos la tabla */
			$output = $crud->render();
			
			/* La cargamos en la vista situada en 
			/applications/views/productos/administracion.php */

			$this->_load_table($output);
			
		}catch(Exception $e){
			/* Si algo sale mal cachamos el error y lo mostramos */
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	/** FINAL Docentes */
	function _load_table($output = null)
    {
    	$this->load->view('layout/headerAdmin');
    	$this->load->view('admin/search_subject_view', $output);
    }

    function _load_layout($template)
    {
    	$this->load->view('layout/headerAdmin');
    	$this->load->view($template);
    }

}
