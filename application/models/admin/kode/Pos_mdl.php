<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pos_mdl extends CI_Model{

	public function get($id = null)
	{
		$this->db->from('biaya_onkir');
		if($id != null){
			$this->db->where('kode_pos', $id);
		}
		$query = $this->db->get()->result();
		return $query;
	}

	public function tambah($data)
	{
		return $this->db->insert('biaya_onkir', $data);
	}
}