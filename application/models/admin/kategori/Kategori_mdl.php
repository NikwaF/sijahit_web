<?php 


class Kategori_mdl extends CI_Model{
	
	public function getKategori(){
		return $this->db->get('kategori')->result_array();
	}
	
	public function tambah($data){
		return $this->db->insert('kategori',$data);
	}
	
}