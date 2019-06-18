<?php

class Login_mdl extends CI_Model{

	public function get_user($mau_login){
		// return $this->db->get_where('account_customer',$mau_login)->result_array();
		$this->db->select('account_customer.email,account_customer.password,account_customer.id_customer,customer.nama_customer,customer.no_hp');
		$this->db->from('account_customer');
		$this->db->join('customer','account_customer.id_customer = customer.id_customer');
		$this->db->where($mau_login);
		return $this->db->get()->result_array();
	}
}
