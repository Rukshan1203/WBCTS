<?php
class LoginModel extends CI_Model
{
	//SELECT * FROM users WHERE email = $login_data['email'] && password = $login_data['password']
	public function select_user($login_data)
	{
		$condition = array(
			'email' => $login_data['email'],
			'password' => $login_data['password']
		);
		//select * from users where $condition
		$query = $this->db->select("*")->from("users")->where($condition);

		//output
		$result = $query->get()->result_array();

		//check whether user is available
		if(count($result) == 1){
			return true;
		}
		else{
			return false;
		}

	}
}
