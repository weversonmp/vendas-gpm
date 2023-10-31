<?php

class Items_model extends CI_Model
{
	public function index()
	{

		return $this->db->order_by('item_name','asc')->get("tb_items")->result_array();
	}

	public function search($search)
	{
		if (!$search) {
			return $this->db->order_by('item_name','asc')->get("tb_items")->result_array();
		}
		$query = "SELECT * FROM tb_items i WHERE i.item_name LIKE '%{$search}%'";
		$query .= " OR i.description LIKE '%{$search}%'";
		$query .= " ORDER BY item_name ASC";

		return $this->db->query($query)->result_array();

	}

	public function editItem($id)
	{

		return $this->db->get_where("tb_items", array(
			'id' => $id
		))->row_array();
	}

	public function update($id, $item)
	{
		$this->db->where("id", $id);
		$this->db->update("tb_items", $item);
	}

	public function delete($id)
	{
		$this->db->where("id", $id);
		$this->db->delete("tb_items");
	}
}
