<?php
class Kategori_mdl extends CI_Model{
	
	public function getKategori(){
		return $this->db->get('kategori')->result_array();
	}
	
	public function tambah($data){
		return $this->db->insert('kategori',$data);
	}

	public function add_tipe($data){
		$this->db->insert('kategori_tipe',$data);
		return $this->db->insert_id();
	}
	
	public function gettipe(){
		return $this->db->get('kategori_tipe')->result_array();
	}
	
	public function getukurantipe(){
		return $this->db->get('kategori_ukuran')->result_array();
	}

  	public function insert_kategori($data){
    	return $this->db->insert('kategori',$data);
  	}

  	public function view_detail(){
  		$this->db->select('*');
  		$this->db->from('kategori');
  		$this->db->where('id_tipe = idtipeyangdipilih');
  		$this->db->join('kategori_ukuran');
  		$query = $this->db->get();
		return $query;
  	}
}
