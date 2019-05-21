<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

/**
 * 
 */
class Pemesanan extends REST_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//menampikan data pesanan
	function index_get()
	{
		$id = $this->get('id');
        if ($id == '') {
            $pemesanan = $this->db->get('pemesanan')->result();
        } else {
            $this->db->where('id', $id);
            $pesanan = $this->db->get('pemesanan')->result();
        }
        $this->response($pemesanan, 200);
	}

	//menambah data
	function index_post()
	{
		$data = array(
			'id_pemesanan' => $this->post('id_pemesanan'),
			'nama_pemesan' => $this->post('nama_pemesan'),
			'kategori_pesanan' => $this->post('kategori_pesanan'),
			'ukuran' => $this->post('ukuran'),
			'detail_pemesanan' => $this->post('detail_pemesanan'),
			'total_harga' => $this->post('total_harga')
		);
		$insert = $this->db->insert('pemesanan', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}

	//mengedit data
	function index_put()
	{
		$id_pemesanan = $this->put('id_pemesanan');
		$data = array(
			'id_pemesanan' => $this->put('id_pemesanan'),
			'nama_pemesan' => $this->put('nama_pemesan'),
			'kategori_pesanan' => $this->put('kategori_pesanan'),
			'ukuran' => $this->put('ukuran'),
			'detail_pemesanan' => $this->put('detail_pemesanan'),
			'total_harga' => $this->put('total_harga')
		);
		$this->db->where('id_pemesanan', $id_pemesanan);
		$update = $this->db->update('pemesanan', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}