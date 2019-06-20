<<<<<<< HEAD
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
=======
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
>>>>>>> d32dcdd825fba954ca80c1caecdb925a7683a6b6
