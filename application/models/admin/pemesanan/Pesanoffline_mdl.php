<?php


class Pesanoffline_mdl extends CI_Model{

	public function getoffline(){
		return $this->db->get('pesan_offline')->result_array();
	}

	public function tambah($data){
		return $this->db->insert('pesan_offline',$data);
	}
	public function jumlah_offline(){
		return $result = $this->db->query("SELECT COUNT(*) as halo FROM pesan_offline");

	}


}
