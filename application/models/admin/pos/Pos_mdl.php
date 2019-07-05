<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pos_mdl extends CI_Model{

	public function get($id = null)
	{
		$this->db->from('ongkir');
		if($id != null){
			$this->db->where('id_ongkir', $id);
		}
		$query = $this->db->get()->result();
		return $query;
	}

	public function tambah($data)
	{
		return $this->db->insert('ongkir',$data);
	}
}