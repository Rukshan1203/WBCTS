<?php


class ProvincesModel extends CI_Model{

	public function select_provinces(){
		$this->db->from('provinces'); // table define
		$this->db->order_by('name_en','asd' );
		$query = $this->db->get(); // get all data from the table
		return $query->result(); // return data
	}

}




