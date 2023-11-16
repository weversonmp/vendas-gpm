<?php

class Cart_model extends CI_Model
{
	public function createOrder($orderInfos)
	{
		$order = $orderInfos->order;
		$itemInfos = $orderInfos->itemInfos;
		$paymentInfos = $orderInfos->paymentInfos;


		$this->db->insert('tb_orders', $order);
		$this->db->insert('tb_order_item', $itemInfos);
		$this->db->insert('tb_order_payment_details', $paymentInfos);

		redirect(base_url());
		
	}

}
