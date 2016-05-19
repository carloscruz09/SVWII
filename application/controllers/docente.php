<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Docente extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('docente_model');
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'docente')
		{
			redirect(base_url().'login_docente');
		}
		$data['titulo'] = 'Bienvenido de nuevo ' .$this->session->userdata('perfil');
		
		$this->_load_layout('docente/docente_view',$data);
	}

	

	function _load_layout($template)
    {
    	$this->load->view('layout/headerDocente');
    	$this->load->view($template);
    	$this->load->view('layout/footer');
    }
}
