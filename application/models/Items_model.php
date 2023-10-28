<?php

class Items_model extends CI_Model
{
	public function index()
	{

		return $this->db->get('tb_items')->result_object();
	}
}
