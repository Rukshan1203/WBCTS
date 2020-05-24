<?php


class CitiesModel extends CI_Model{

	public function select_cities(){
		$this->db->from('cities'); // table define
		$this->db->order_by('name_en','asd' );
		$query = $this->db->get(); // get all data from the table
		return $query->result(); // return data
	}

	public function select_postal_code($cities){
		$this->db->from('cities');
		$this->db->where('name_en', $cities );
		$query = $this->db->get();
		return $query->result();
	}

}

