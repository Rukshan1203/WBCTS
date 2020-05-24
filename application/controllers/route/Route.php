<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Route extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('RouteModel');
	}

	public function index()
	{
		$data = array(
			'route' => $this->RouteModel->selectroute()
		);

		$this->load->view('header');
		$this->load->view('route/route', $data);
		$this->load->view('footer');

	}

	//adding route details
	public function add_route(){
		$new_route = array(
			'route_name' => $this->input->post('route_name'),
			'number' => $this->input->post('number'),
			'type' => $this->input->post('type'),
			'origin' => $this->input->post('origin'),
			'create_date' => date('Y-m-d'),
		);

		$result = $this->RouteModel->createrute($new_route);

		if($result == true){
			redirect('route/route');
		}
	}
}

