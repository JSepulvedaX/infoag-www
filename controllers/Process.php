<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Process extends CI_Controller {

        function __construct()
        {
                parent::__construct();
                $this->load->model('poly','',TRUE);
                $this->load->library('form_validation');
        }


	public function index()
	{		
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			//$this->redirect_page("yes", "process_view", $session_data['user'], $session_data['type']);
			$this->latLng();
		}
		else
		{
			$this->redirect_page("no", "home_view", null, null);
		}
	}
	
	function redirect_page($login, $page, $user, $user_type)
	{
		$error_msg = $this->session->flashdata('error');
		
		$data['page'] = "process";
		$data['error'] = $error_msg;
		$data['login'] = $login;
		$data['user'] = $user;
		$data['user_type'] = $user_type;
		$this->load->view($page, $data);
	}



        function latLng()
        {
                $this->form_validation->set_rules('inputLat', 'inputLat', 'trim|required|xss_clean'); $this->check_form_validation();
                $this->form_validation->set_rules('inputLng', 'inputLng', 'trim|required|xss_clean'); $this->check_form_validation();

                $lat = $this->input->post('inputLat');
                $lng = $this->input->post('inputLng');


		echo "lat = [" . $lat . "], lng = [" . $lng . "]<br>";

		$agrzone = $this->poly->getPoly($lat, $lng, 5);

		$station = $this->poly->getStat($lat, $lng, $agrzone);


		//echo "  -  Poly =  " . $result;

                /*if($this->check_database($user, $pass) == FALSE)
                {
                        $this->session->set_flashdata('error', 'error_login');
                        redirect('home', 'refresh');
                }
                else
                {
                        redirect('panel_adm', 'refresh');
		}*/
        }

        function check_form_validation()
        {
                /*if($this->form_validation->run() == FALSE)
                {
                        $this->session->set_flashdata('error', 'error_login');
                        redirect('home', 'refresh');
		}*/
        }


        /*function check_database($user, $pass)
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
	}*/


}
