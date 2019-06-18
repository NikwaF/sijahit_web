<?php


class Register_mdl extends CI_Model{

	public function register($customer, $alamat, $account){
		$this->db->trans_start();
		$this->db->insert('customer',$customer);
		//mengambil id dari customer yang baru saja diinsertkan dengan method insert_id()
		$customer_id = array('id_customer' => $this->db->insert_id());
		//gabungin array dari $alamat dengan $customer_id karena yang dikirimkan barusan dari controller belum ada id_customer
		$alamatfix = array_merge($alamat,$customer_id);
		$this->db->insert('alamat_customer', $alamatfix);

		//gabungin array dari $account dengan $customer_id karena yang dikirimkan barusan dari controller belum ada id_customer
		$accountfix = array_merge($account,$customer_id);
		$this->db->insert('account_customer',$accountfix);

		//Transactions di return untuk dapetin true ato false, true saaat semua proses insert berjalan
		return $this->db->trans_complete();
	}

	public function get_user($email){
		return $this->db->get_where('account_customer',$email)->result_array();
	}
}
