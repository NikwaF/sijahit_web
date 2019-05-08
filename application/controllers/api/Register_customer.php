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
		
		$cekEmail = $this->reg->get_user($halo = array('email' => $post['email']));
		
		if(sizeof($cekEmail) > 0 ){
			$this->response([
				'status' => false,
				'pesan' => 'email sudah pernah dipakai'
			],HTTP_BAD_REQUEST);			
		} else {
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
} 