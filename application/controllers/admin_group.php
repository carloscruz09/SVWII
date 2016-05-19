<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_group extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->database('default');
		$this->load->library('grocery_crud');
	}
	
	public function search_group()
	{
		try{

			/* Creamos el objeto */
			$crud = new grocery_CRUD();

			/* Seleccionamos el tema */
			$crud->set_theme('datatables');

			/* Seleccionmos el nombre de la tabla de nuestra base de datos*/
			$crud->set_table('grupos');

			/* Le asignamos un nombre */
			$crud->set_subject('Grupos');
			

			/* Asignamos el idioma español */
			$crud->set_language('spanish');

			/* Aqui le decimos a grocery que estos campos son obligatorios */
			$crud->required_fields(
				'nombre_grupo',
				'ciclo_escolar', 
				'semestre', 
				'seccion'
			);

			/* Aqui le indicamos que campos deseamos mostrar */
			$crud->columns(
				'nombre_grupo',
				'ciclo_escolar',
				'semestre',
				'seccion'
			);

			/* Aqui le indicamos la validación de los campos para agregar */
			 $crud->callback_add_field('nombre_grupo', function () {
       		 	return '<input type="text"  value="" name="nombre_grupo" data-mask="9-*" placeholder="semestre-seccion ej.(1-B)">';
    		});

			$crud->callback_add_field('ciclo_escolar', function () {
       		 	return '<select name="ciclo_escolar"  style="width:462px">
			                <option value="AGO-DIC-2016">AGO-DIC-2016</option>
			                <option value="ENE-JUN-2016">ENE-JUN-2016</option>
			                <option value="AGO-DIC-2017">AGO-DIC-2017</option>
			                <option value="ENE-JUN-2017">ENE-JUN-2017</option>
			                <option value="AGO-DIC-2018">AGO-DIC-2018</option>
			                <option value="ENE-JUN-2018">ENE-JUN-2018</option>
             			</select>';
    		});

    		$crud->callback_add_field('semestre', function () {
       		 	return '<input type="number" min="1" max="6" step="1" value="" name="semestre">';
    		});

    		$crud->callback_add_field('seccion', function () {
       		 	return '<input type="text"  value="" name="seccion"  data-mask="*" placeholder="ej.(A o B)">';
    		});

    		/* Aqui le indicamos la validación de los campos para editar */
    		$crud->callback_edit_field('nombre_grupo',array($this,'edit_field_callback_1'));
    		$crud->callback_edit_field('ciclo_escolar',array($this,'edit_field_callback_2'));
    		$crud->callback_edit_field('semestre',array($this,'edit_field_callback_3'));
    		$crud->callback_edit_field('seccion',array($this,'edit_field_callback_4'));
			
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

	function edit_field_callback_1($value, $primary_key)
	{
		return '<input type="text"  value="'.$value.'" name="nombre_grupo" data-mask="9-*" placeholder="semestre-seccion ej.(1-B)">';
	}

	function edit_field_callback_2($value, $primary_key)
	{
		return '<select name="ciclo_escolar"  style="width:462px">
							<option value="'.$value.'">'.$value.'</option>
			                <option value="AGO-DIC-2016">AGO-DIC-2016</option>
			                <option value="ENE-JUN-2016">ENE-JUN-2016</option>
			                <option value="AGO-DIC-2017">AGO-DIC-2017</option>
			                <option value="ENE-JUN-2017">ENE-JUN-2017</option>
			                <option value="AGO-DIC-2018">AGO-DIC-2018</option>
			                <option value="ENE-JUN-2018">ENE-JUN-2018</option>
             			</select>';
	}

	function edit_field_callback_3($value, $primary_key)
	{
		return '<input type="number" min="1" max="6" step="1" value="'.$value.'" name="semestre">';
	}

	function edit_field_callback_4($value, $primary_key)
	{
		return '<input type="text"  value="'.$value.'" name="seccion"  data-mask="*" placeholder="ej.(A o B)">';
	}

	/** FINAL Docentes */
	function _load_table($output = null)
    {
    	$this->load->view('layout/headerAdmin');
    	$this->load->view('admin/search_group_view', $output);
    }

    function _load_layout($template)
    {
    	$this->load->view('layout/headerAdmin');
    	$this->load->view($template);
    }

}
