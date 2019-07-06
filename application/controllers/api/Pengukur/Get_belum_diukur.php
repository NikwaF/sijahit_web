<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Get_belum_diukur extends REST_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/pemesanan/pemesanan_mdl','pemesanan');
  }
  
  public function index_get(){
    if(!isset($_POST['kode_pemesanan'])){
      $data = $this->pemesanan->get_belum_diukur();
      if(!count($data) > 0){
        $this->response([
            'kode' => '1',
            'pesan' => 'Tidak ada yang perlu diukur',
            'data' => $hasil
          ]);//,HTTP_OK);
      } else {
        $this->response([
            'kode' => '2',
            'pesan' => 'Ada yang perlu diukur nih',
            'data' => $data
          ]);//,HTTP_OK);
      }
    } else{

    }
  }
}
