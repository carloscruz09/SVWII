<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Admin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('admin_model');
		$this->load->database('default');
	}
	
	function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
		{
			redirect(base_url().'login_admin');
		}
                 
		$this->_load_layout2('admin/admin_view');
		
	}

	/** INICIO Avisos ---------------------------------------------------------------------------------------*/
	public function notices()
	{
		$this->_load_layout('admin/notices/notices_view');
	}

	public function send_student()
	{
		$this->_load_layout('admin/notices/send_student_view');
	}
	/** FINAL Avisos */
	function _load_layout2($data)
    {
    	$administradores = $this->admin_model->get_admins();
    	$profesores = $this->admin_model->get_teachers();
    	$alumnos = $this->admin_model->get_students();
    	$usuarios = $alumnos + $profesores + $alumnos;

    	$data = array( 
                 'administradores' => $administradores,
                 'profesores' => $profesores,
                 'alumnos' => $alumnos,
                 'usuarios' => $usuarios);	

    	$this->load->view('layout/headerAdmin');
    	$this->load->view('admin/admin_view',$data);
    }

	function _load_layout($template)
    {
    	$this->load->view('layout/headerAdmin');
    	$this->load->view($template);
    }
}
