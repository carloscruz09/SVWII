<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: isra
 * Date: 19/01/13
 * Time: 18:51
 * To change this template use File | Settings | File Templates.
 */
class Login_alumno extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('login_model');
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
    }
	
	public function index()
	{	
		switch ($this->session->userdata('perfil')) {
			case '':
				$data['token'] = $this->token();
				$data['titulo'] = 'Login';
				$this->load->view('login_alumno_view',$data);
				break;
			case 'alumno':
				redirect(base_url().'alumno');
				
			default:		
				$data['titulo'] = 'Login con roles de usuario en codeigniter';
				$this->load->view('login_alumno_view',$data);
				break;		
		}
	}
	
	public function token()
	{
		$token = md5(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}
	
	public function new_user()
	{
		if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
		{
			$this->form_validation->set_error_delimiters('<span class="mensaje-error">','</span>');
            $this->form_validation->set_rules('username', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
            $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[4]|max_length[150]|xss_clean');
 
            //lanzamos mensajes de error si es que los hay
            $this->form_validation->set_message('required', 'El %s es requerido');
            $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
            $this->form_validation->set_message('max_length', 'El %s debe tener al menos %s carácteres');
			if($this->form_validation->run() == FALSE)
			{
				$this->index();
			}else{
				$username = $this->input->post('username');
				$password = sha1($this->input->post('password'));
				$check_user = $this->login_model->login_alumnos($username,$password);
				if($check_user == TRUE)
				{
					$data = array(
	                'is_logued_in' 	=> 		TRUE,
	                'usuario' 		=> 		$check_user->matricula,
	                'perfil'		=>		$check_user->perfil,
	                'nombre' 		=> 		$check_user->nombre,
	                'apellido' 		=> 		$check_user->a_paterno,
	                'email' 		=> 		$check_user->email
            		);		
					$this->session->set_userdata($data);
					$this->index();
				}
			}
		}else{
			redirect(base_url().'login_alumno');
		}
	}

	public function logout_ci()
	{
		$this->session->sess_destroy();
		$this->index();
	}

}