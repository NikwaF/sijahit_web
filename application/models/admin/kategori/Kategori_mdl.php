<?php
class Kategori_mdl extends CI_Model{
	
	public function getKategori(){
		return $this->db->get('kategori')->result_array();
	}

	public function getwherekategori($id){
		// return $this->db->get_where('kategori',$id)->result_array();
		$this->db->select('kategori.id_kategori,kategori_tipe.nama_tipe,kategori_ukuran.nama_ukuran,kategori.harga_max,kategori.harga_min');
		$this->db->from('kategori');
		$this->db->join('kategori_tipe','kategori.id_tipe = kategori_tipe.id_kategori_tipe','inner');
		$this->db->join('kategori_ukuran','kategori.id_ukuran = kategori_ukuran.id_kategori_ukuran','inner');
		$this->db->where(['id_kategori' => $id]);
		return $this->db->get()->result_array();
	}
	
	public function tambah($data){
		return $this->db->insert('kategori',$data);
	}

	public function add_tipe($data){
		return $this->db->insert('kategori_tipe',$data);
	}

	public function update_kategori($id, $datanya){
		$this->db->where('id_kategori', $id);
		return $this->db->update('kategori',$datanya);
	}

		public function delete_kategori($id){
		$this->db->where('id_kategori', $id);
		return $this->db->delete('kategori');
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

	public function get_berfore_insert($data){
		$this->db->where($data);
		return $this->db->get('kategori')->result_array();
	}
	
	public function kategori_join(){
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->join('kategori_tipe','kategori.id_tipe = kategori_tipe.id_kategori_tipe','inner');
		$this->db->join('kategori_ukuran','kategori.id_ukuran = kategori_ukuran.id_kategori_ukuran','inner');
		return $this->db->get()->result_array();
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
