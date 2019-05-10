<?php

class Customer_mdl extends CI_Model{
	
	public function get_customer_info(){
		$this->db->select('customer.id_customer,alamat_customer.id_customer,nama_customer,no_hp,email,roles.nama_roles,alamat_customer.desa,alamat_customer.kecamatan,
		alamat_customer.kelurahan,alamat_customer.kode_pos,alamat_customer.detail_alamat');
		$this->db->from('customer');
		$this->db->join('roles','customer.id_roles = roles.id_roles');
		$this->db->join('alamat_customer','customer.id_customer = alamat_customer.id_customer');
		$this->db->order_by('customer.id_customer','desc');
		$hasilnya = $this->db->get()->result_array();
		return $hasilnya;
	}
	
}