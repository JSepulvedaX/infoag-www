<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function index()
	{		
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$this->redirect_page("yes", "reports_view", $session_data['user'], $session_data['type']);
		}
		else
		{
			$this->redirect_page("no", "home_view", null, null);
		}
	}
	
	function redirect_page($login, $page, $user, $user_type)
	{
		$error_msg = $this->session->flashdata('error');
		
		$data['page'] = "reports";
		$data['error'] = $error_msg;
		$data['login'] = $login;
		$data['user'] = $user;
		$data['user_type'] = $user_type;
		$this->load->view($page, $data);
	}
	
	function leave()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		$this->redirect_page("no", "home_view", null, null);
	}
}
