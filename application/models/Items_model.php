<?php

class Items_model extends CI_Model
{
	public function index()
	{

		return $this->db->get("tb_items")->result_array();
	}

	public function editItem($id)
	{

		return $this->db->where("tb_items", array(
			'id' => $id
		))->row_array();
	}
}
