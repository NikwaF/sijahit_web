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

	public function tambah($post)
	{
		$params['kode_pos'] = $post['kode_pos'];
		$params['biaya'] = $post['biaya'];
		return $this->db->insert('biaya_onkir', $params);
	}

	public function edit($post)
	{
		$params['kode_pos'] = $post['kode_pos'];
		$params['biaya'] = $post['biaya'];
		$this->db->where('kode_pos', $post['kode_pos']);
		$this->db->update('biaya_onkir', $params);
	}

	public function del($id)
	{
		$this->db->where('kode_pos', $id);
		$this->db->delete('biaya_onkir');
	}
}