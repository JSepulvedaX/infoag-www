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
			$this->latLng(); //control de errores
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

		$data['page'] = "process";
		$data['error'] = $error_msg;
		$data['login'] = $login;
		$data['user'] = $user;
		$data['user_type'] = $user_type;
		$this->load->view($page, $data);
	}

    function latLng()
    {
        $sock;

        $this->form_validation->set_rules('inputLat', 'inputLat', 'trim|required|xss_clean'); $this->check_form_validation();
        $this->form_validation->set_rules('inputLng', 'inputLng', 'trim|required|xss_clean'); $this->check_form_validation();

        $lat = $this->input->post('inputLat');
        $lng = $this->input->post('inputLng');

		//echo "lat = [" . $lat . "], lng = [" . $lng . "]<br>";
		//$agrzone = $this->poly->getPoly($lat, $lng, 5);
		//$station = $this->poly->getStat($lat, $lng, $agrzone);

        if(!($sock = socket_create(AF_INET, SOCK_STREAM, 0)))
        {
            $errorcode = socket_last_error();
            $errormsg = socket_strerror($errorcode);

            die("Couldn't create socket: [$errorcode] $errormsg \n");
        }

        if(!socket_connect($sock , '127.0.0.1' , 5100))
        {
            $errorcode = socket_last_error();
            $errormsg = socket_strerror($errorcode);

            die("Could not connect: [$errorcode] $errormsg \n");
        }

        $message = "INFMET:#user_id,".$lat.",".$lng.",2015-01-01,2015-12-31";

        //Send the message to the server
        if(!socket_send( $sock , $message , strlen($message) , 0))
        {
            $errorcode = socket_last_error();
            $errormsg = socket_strerror($errorcode);

            die("Could not send data: [$errorcode] $errormsg \n");
        }

    }

    function check_form_validation()
    {
        /*if($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', 'error_login');
            redirect('home', 'refresh');
	    }*/
    }
}
