<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel');
	}


	public function index()
	{
		$this->load->view('Login/login');
	}

	public function signup(){
		//assign input values to variable
		$data = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
		);
		$query_result = $this->LoginModel->select_user($data);

		if($query_result == true){
			$this->session->set_userdata('name','Rukshan Silva');
			redirect('dashboard');
		}
		else {
			redirect('Login/login');
		}
	}
}


