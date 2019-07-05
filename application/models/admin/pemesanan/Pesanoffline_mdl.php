<?php

class Pesanoffline_mdl extends CI_Model{

	public function getoffline(){
		return $this->db->get('pesan_offline')->result_array();
	}

	public function tambah($data){
		return $this->db->insert('pesan_offline',$data);
	}
	// 
	// public function jumlah_offline(){
	// 	return $result = $this->db->query("SELECT COUNT(*) as halo FROM pesan_offline");

	// }

	public function getKodePemesanan(){
		$this->db->select('kode_pemesanan');
		return $this->db->get('pemesanan')->result_array();
	}

	public function getIdPemesananDetail(){
		$this->db->select('id_detail_pesanan');
		return $this->db->get('pemesanan_detail')->result_array();
	}

	public function insert_pemesanan($data){
		return $this->db->insert('pemesanan',$data);
	}

	public function insert_pemesanan_detail($data){
		return $this->db->insert('pemesanan_detail',$data);
	}

	// public function insert_pemesanan_dan_detail($){
	// 	return $this->db->insert('pemesanan_detail',$data);
	// }
}

