<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commuter extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('CommuterModel');
		$this->load->model('CitiesModel');
		$this->load->model('DistrictsModel');
		$this->load->model('ProvincesModel');
	}

	public function index()
	{
		$data = array(
			'commuter' => $this->CommuterModel->select_commuter(),
			'cities' => $this->CitiesModel->select_cities(),
			'districts' => $this->DistrictsModel->select_districts(),
			'provinces' => $this->ProvincesModel->select_provinces()

		);

		$this->load->view('header');
		$this->load->view('commuter/commuter', $data);
		$this->load->view('footer');

	}

	//adding commuter details
	public function add_commuter(){
		$new_commuter = array(
			'commuter_name' => $this->input->post('commuter_name'),
			'email' => $this->input->post('email'),
			'nic' => $this->input->post('nic'),
			'mobile' => $this->input->post('mobile'),
			'street' => $this->input->post('street'),
			'street_two' => $this->input->post('street_two'),
			'cities' => $this->input->post('cities'),
			'postal_code' => $this->input->post('postal_code'),
			'districts' => $this->input->post('districts'),
			'provinces' => $this->input->post('provinces'),
			'create_date' => date('Y-m-d'),
		);

		$result = $this->CommuterModel->create_commuter($new_commuter);

		if($result == true){
			redirect('commuter/commuter');
		}
	}

	public function get_postal_code(){
			$cities=$this->input->get('cities');
			$result = $this->CitiesModel->select_postal_code($cities);
				echo json_encode($result);

	}


}

