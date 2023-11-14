<?php

class Profile_model extends CI_Model
{

	public function getOrders()
	{
		$res = $this->db->query("SELECT * FROM tb_orders o 
		JOIN tb_users u ON o.user_id = u.id
		JOIN tb_order_item i ON i.order_id = o.id 
		JOIN tb_order_payment_details d ON d.order_id = o.id
		JOIN tb_items it ON it.id = i.copy_item_id
		WHERE u.id = {$_SESSION['logged_user']['id']}");

		return $res->result_array();
	}

	public function getAllUsersOrders()
	{
		$res = $this->db->query("SELECT * FROM tb_orders o 
		JOIN tb_users u ON o.user_id = u.id
		JOIN tb_order_item i ON i.order_id = o.id 
		JOIN tb_order_payment_details d ON d.order_id = o.id
		JOIN tb_items it ON it.id = i.copy_item_id
		WHERE u.id > 0");

		return $res->result_array();
	}
}
