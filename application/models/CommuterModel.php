<?php


class CommuterModel extends CI_Model{

	public function select_commuter(){
		$this->db->from('commuter'); // table define
		$query = $this->db->get(); // get all data from the table
		return $query->result(); // return data
	}

	public function create_commuter($new_commuter){
		$this->db->insert('commuter', $new_commuter);

		if($this->db->affected_rows() == 1){
			return true;
		}else{
			return false;
		}
	}


}
