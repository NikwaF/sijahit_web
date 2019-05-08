<?php 

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Register_customer extends REST_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('customer/register_mdl','reg');
	}
	
	public function index_post(){
		$post = $this->input->post();
		
		$customer = array (
			'nama_customer' => $post['nama'],
			'no_hp' => $post['no_hp'],
			'email' => $post['email'],
			'password' => password_hash($post['password'], PASSWORD_DEFAULT),
			'id_roles' => 1,
			'date_created' => date('Y-m-d H:i:s')
		);
		
		$alamat = array (
			'desa' => $post['desa'],
			'kecamatan' => $post['kecamatan'],
			'kelurahan' => $post['kelurahan'],
			'kode_pos' => $post['kode_pos'],
			'detail_alamat' => $post['detail_alamat'],
			'date_created' => date('Y-m-d H:i:s')
		);
		
		$registercoy = $this->reg->register($customer,$alamat);
		
		if(!$registercoy){
			$this->response([
				'status' => false,
				'pesan' => 'registrasi gagal'
			],HTTP_BAD_REQUEST);
		} else {
			$this->response([
				'status' => true,
				'pesan' => 'registrasi user berhasil'
			], REST_Controller::HTTP_CREATED);
		}
	}
} 