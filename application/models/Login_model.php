<?php

class Login_model extends CI_Model
{
	public function userLogin($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('user_password', $password);

		$res = $this->db->get("tb_users")->row_array();
		$user['id'] = $res['id'];
		$user['username'] = $res['username'];
		$user['email'] = $res['email'];
		$user['first_name'] = $res['first_name'];
		$user['last_name'] = $res['last_name'];
		$user['access_type'] = $res['access_type'];

		return $user;
	}

	public function userSignup($newUser)
	{
		$this->db->insert("tb_users", $newUser);
	}
}
