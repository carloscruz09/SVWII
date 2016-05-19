<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Alumno extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'alumno')
		{
			redirect(base_url().'login_alumno');
		}
		$data['titulo'] = 'Bienvenido a la web '.$this->session->userdata('perfil');
		
		$this->_load_layout('alumno/alumno_view',$data);
	}
	
	function _load_layout($template)
    {
    	$this->load->view('layout/headerAlumno');
    	$this->load->view($template);
    	$this->load->view('layout/footer');
    }
}

