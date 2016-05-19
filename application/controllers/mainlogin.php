<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Mainlogin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
	}
	
	public function index()
	{
		
		$this->_load_layout('mainlogin_view');
	}

	function _load_layout($template)
    {
    	$this->load->view($template);
    	$this->load->view('layout/footer');
    }
}
