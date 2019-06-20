<?php 

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Login_customer extends REST_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('customer/login_mdl','login');
	}
	
	public function index_post(){
		$post = $this->input->post();
		
		$Emailnya = array(
			'email' => $post['email']
		);
		
		$cekEmailnya = $this->login->get_user($Emailnya);
		
		
		if(sizeof($cekEmailnya) == 1){
			
			if (password_verify($post['password'], $cekEmailnya[0]['password'])){
				if($cekEmailnya[0]['id_roles'] == 1){
					$this->response([
						'kode' => '1',
            'pesan' => 'Sukses Login user',
            'data' => ['id' => $cekEmailnya[0]['id_customer']  , 'nama' => $cekEmailnya[0]['nama_customer']  , 'email' => $cekEmailnya[0]['email'] , 'no_hp' => $cekEmailnya[0]['no_hp']]
					]);//,HTTP_OK);	
				}
				
				if($cekEmailnya[0]['id_roles'] == 2){
					$this->response([
						'kode' => '4',
						'pesan' => 'Sukses Login selamat bekerja'
					]);//,HTTP_OK);						
				}								
				
			} else {
			$this->response([
				'kode' => '2',
				'pesan' => 'password anda salah, coba login lagi'
			]);//,HTTP_NOT_FOUND);				
			}
			
		} else {
			$this->response([
				'kode' => '3',
				'pesan' => 'anda belum terdaftar, silahkan mendaftar dulu'
			]);//,HTTP_NOT_FOUND);
		}
	}
}
