<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Upload_gambar_test extends REST_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('upload_mdl_test','upload');
  }

  public function index_post(){
    $path = realpath(APPPATH.'../assets/gambar/model_pesanan/');
    $nama_gambar = 'gm_'.time().'.jpeg';
    $target = $path.'/gm_' .time().'.jpeg';
    $image_post = $this->input->post('image');
    $image = base64_decode($image_post);



    if(file_put_contents($target,$image)){

        $this->response([
          'kode' => '2',
          'pesan' => $target
        ]);
     
    } else{
      $this->response([
            'kode' => '1',
            'pesan' => 'Gambar tidak diUpload'
          ]);
    }
  }

}