<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Panel_adm extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//$this->load->model('client','',TRUE);
		//$this->load->model('device','',TRUE);
		//$this->load->model('test','',TRUE);
	}
	
	public function index()
	{
		$this->redirect_if();
	}
	
	function redirect_if()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$this->redirect_page("yes", "panel_adm_view", $session_data['user'], $session_data['type']);
		}
		else
		{
			$this->redirect_page("no", "home_view", null, null);
		}		
	}
	
	function redirect_page($login, $page, $user, $user_type)
	{
		$error_msg = $this->session->flashdata('error');

		$data['page'] = "panel_adm";
		$data['error'] = $error_msg;
		$data['login'] = $login;
		$data['user'] = $user;
		$data['user_type'] = $user_type;
		
		//if($page == "panel_adm_view")
			//$data['array_clients'] = $this->client->get_clients();
		
		$this->load->view($page, $data);
	}
	
	/*function connect_device()
	{
		$token = $this->input->post('Token');		
		$so = $this->input->post('SO');
		$reponse = $this->device->connect($token, $so);
		echo $reponse;		
		return $reponse;
	}
	
	
	function registry_device()
	{
		$token = $this->input->post('Token');
		$client = $this->input->post('Client');		
		$mail = $this->input->post('Mail');
		$phone = $this->input->post('Phone');
		$pass = $this->input->post('Pass');
		$reponse = $this->device->registry($token, $client, $mail, $phone, $pass);
		
		echo "token:".$token." client:".$client." mail:".$mail." phone:".$phone." pass:".$pass;
		
		return $reponse;
	}
	
	function test()
	{
		$data = $this->input->post('Data');	
		$this->test->insert($data);
		
		echo $data;
		
		return "lol";
	}
	
	function send_notification()
	{
		$notification = $this->input->post('notification');
		$type_notification = $this->input->post('type_notification');		
		
		if($type_notification == "#")
		{
			return;
		}
		
		$url = 'https://fcm.googleapis.com/fcm/send';
		//curl_setopt( $ch,CURLOPT_URL, 'https://android.googleapis.com/gcm/send' );
		
		$tokens = array('f3gpL1eTqQo:APA91bEph4ZMKQysUDVKMeHkEFDBDPLVLduFaZ1SD-jMh1-PCYA-aCk3ofEzoZKrtnNa5-BjPAiGxl_4jom0-hDTTAyzEa_r1ZWd_EhxC8zMm7dsTgX1fsdN5FXhvo9aZUf_RnfqHc3Y');
		
		$message = array('title_data' => $notification,
						 'time_to_live' => 10,
						 'body_data' => $type_notification);
		
		$headers = array(
			'Authorization:key = AIzaSyDzltBDlL09IY4l6xnCXOJZvgOi8p0G_Gc',
			'Content-Type: application/json');
		
		$fields = array(
			'registration_ids' => $tokens,
			'data' => $message);
			
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);  
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
		$result = curl_exec($ch);           
		if ($result === FALSE) {
           die('Curl failed: ' . curl_error($ch));
		}
		curl_close($ch);
		
		$this->redirect_if();
	}*/
}
