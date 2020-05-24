<?php


class RouteModel extends CI_Model{

	public function selectroute(){
		$this->db->from('route'); // table define
		$query = $this->db->get(); // get all data from the table
		return $query->result(); // return data
	}

	public function createroute($new_route){
		$this->db->insert('route', $new_route);

		if($this->db->affected_rows() == 1){
			return true;
		}else{
			return false;
		}
	}


}

