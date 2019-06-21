<?php

class Customer_mdl extends CI_Model{
	
	public function get_customer_info(){
		$this->db->select('customer.id_customer,alamat_customer.id_customer,nama_customer,no_hp,email,alamat_customer.desa,alamat_customer.kecamatan,
		alamat_customer.kelurahan,alamat_customer.kode_pos,alamat_customer.detail_alamat');
		$this->db->from('customer');
		$this->db->join('alamat_customer','customer.id_customer = alamat_customer.id_customer');
		$this->db->order_by('customer.id_customer','desc');
		$hasilnya = $this->db->get()->result_array();
		return $hasilnya;
	}

	public function insert_customer($data){
		$this->db->insert('customer',$data);
		$id_customer = $this->db->insert_id();
		return $id_customer;
	}

	public function delete_customer($data){
		return $this->db->delete('customer',$data);
	}
}