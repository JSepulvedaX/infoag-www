<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Check extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user','',TRUE);
		$this->load->library('form_validation');
	}

	function index()
	{
		redirect('home', 'refresh');
	}
	
	function check_login()
	{
		$this->form_validation->set_rules('user', 'user', 'trim|required|xss_clean'); $this->check_form_validation();
		$this->form_validation->set_rules('pass', 'pass', 'trim|required|xss_clean'); $this->check_form_validation();

		$user = $this->input->post('user');
		$pass = $this->input->post('pass');		
		
		if($this->check_database($user, $pass) == FALSE)
		{		
			$this->session->set_flashdata('error', 'error_login');
			redirect('home', 'refresh');
		}
		else
		{
			redirect('panel_adm', 'refresh');
		}
	}
	
	function check_form_validation()
	{
		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('error', 'error_login');
			redirect('home', 'refresh');
		}
	}

	function check_database($user, $pass)
	{
		$result = $this->user->login($user, $pass);
		
		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'user' => $row->use_name,
					'type' => "Admin"
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}
?>
