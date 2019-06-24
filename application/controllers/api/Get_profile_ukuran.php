<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Get_profile_ukuran extends REST_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/profile_ukuran/profile_ukuran_mdl','ukuran');
	}

	public function index_post(){
    $post = $this->input->post();

    if(isset($_POST['id_customer']) && isset($_POST['id_profile_ukuran'])){
      $id_customer = $post['id_customer'];
      $id_profile_ukuran = $post['id_profile_ukuran'];
      
      $hasil = $this->ukuran->get_where_profile($id_customer,$id_profile_ukuran);

      if(sizeof($hasil) > 0) {
        $this->response([
            'kode' => '1',
            'pesan' => 'Data berhasil diambil',
            'data' => $hasil
          ]);//,HTTP_OK);
      } else{
        $this->response([
            'kode' => '2',
            'pesan' => 'Data gagal diambil',
            'data' => $hasil
        ]); 
      }
    } else {
      $id_customer = $post['id_customer'];
      $hasil = $this->ukuran->get_where_profile($id_customer);


      if(sizeof($hasil) > 0) {
        $this->response([
          'kode' => '1',
          'pesan' => 'Data berhasil diambil',
          'data' => $hasil
        ]);//,HTTP_OK);
    } else{
      $this->response([
          'kode' => '2',
          'pesan' => 'Data gagal diambil',
          'data' => $hasil
      ]);
    // } 
    }
  }
}
}
