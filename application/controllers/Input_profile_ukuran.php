<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Input_profile_ukuran extends REST_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/profile_ukuran/profile_ukuran_mdl','ukuran');
	}

	public function index_post(){
    $post = $this->input->post();
    $field = ['panjang_dada','lebar_dada','lingkar_dada','lingkar_pinggang','panjang_lengan','lingkar_lengan','panjang_celana',
    'lingkar_pinggul','lingkar_celana','lingkar_paha','panjang_bahu','panjang_punggung'];
    
    $data = [];
    

    for($i=0; sizeof($field)-1 >= $i; $i++){
      if(isset($_POST[$field[$i]])){
        $data[] = [
          $field[$i] => $post[$field[$i]],
        ];
      } else{
         $data[] = [
          $field[$i] => NULL,
        ];
      }
    }
 
    $data_insert = [
      'id_customer' => $post['id_customer'],
      'nama_profile' => $post['nama_profile'],
      'panjang_dada' => $data[0]['panjang_dada'],
      'lebar_dada' => $data[1]['lebar_dada'],
      'lingkar_dada' => $data[2]['lingkar_dada'],
      'lingkar_pinggang' => $data[3]['lingkar_pinggang'] ,
      'panjang_lengan' => $data[4]['panjang_lengan'],
      'lingkar_lengan' => $data[5]['lingkar_lengan'],
      'panjang_celana' => $data[6]['panjang_celana'],
      'lingkar_pinggul' => $data[7]['lingkar_pinggul'],
      'lingkar_celana' => $data[8]['lingkar_celana'],
      'lingkar_paha' => $data[9]['lingkar_paha'],
      'panjang_bahu' => $data[10]['panjang_bahu'],
      'panjang_punggung' => $data[11]['panjang_punggung'],
      'jenis_kelamin' => $post['jenis_kelamin']
    ];

    $insertkan = $this->ukuran->insert_profile_ukuran($data_insert);
    if($insertkan > 0) {
      $this->response([
          'kode' => '1',
          'pesan' => 'Data Berhasil Ditambahkan'
        ]);//,HTTP_OK);
    } else{
      $this->response([
          'kode' => '2',
          'pesan' => 'Data gagal ditambahkan'
      ]);
    }
  }
  

  public function index_put(){
    $post = $this->put();

    $field = ['panjang_dada','lebar_dada','lingkar_dada','lingkar_pinggang','panjang_lengan','lingkar_lengan','panjang_celana',
    'lingkar_pinggul','lingkar_celana','lingkar_paha','panjang_bahu','panjang_punggung'];
    
    $data = [];

    for($i=0; sizeof($field)-1 >= $i; $i++){
      if($post[$field[$i]]){
        $data[] = [
          $field[$i] => $post[$field[$i]],
        ];
      } else{
         $data[] = [
          $field[$i] => NULL,
        ];
      }
    }

    $id = ['id_profile_ukuran' => $post['id_profile_ukuran']] ;

 
    $data_update = [
      'id_customer' => $post['id_customer'],
      'nama_profile' => $post['nama_profile'],
      'panjang_dada' => $data[0]['panjang_dada'],
      'lebar_dada' => $data[1]['lebar_dada'],
      'lingkar_dada' => $data[2]['lingkar_dada'],
      'lingkar_pinggang' => $data[3]['lingkar_pinggang'] ,
      'panjang_lengan' => $data[4]['panjang_lengan'],
      'lingkar_lengan' => $data[5]['lingkar_lengan'],
      'panjang_celana' => $data[6]['panjang_celana'],
      'lingkar_pinggul' => $data[7]['lingkar_pinggul'],
      'lingkar_celana' => $data[8]['lingkar_celana'],
      'lingkar_paha' => $data[9]['lingkar_paha'],
      'panjang_bahu' => $data[10]['panjang_bahu'],
      'panjang_punggung' => $data[11]['panjang_punggung'],
      'jenis_kelamin' => $post['jenis_kelamin']
    ];

    $update  = $this->ukuran->update_ukuran($data_update,$id);

    if($update) {
      $this->response([
          'kode' => '1',
          'pesan' => 'Data Berhasil diUpdate'
        ]);//,HTTP_OK);
    } else{
      $this->response([
          'kode' => '2',
          'pesan' => 'Data gagal diUpdate'
      ]);
    }
  }

  public function index_delete(){
    $post = $this->delete();

    $data = [
      'id_customer' => $post['id_customer'],
      'id_profile_ukuran' => $post['id_profile_ukuran']
    ];

    $delete = $this->ukuran->delete_profile_ukuran($data);

    if($delete) {
      $this->response([
          'kode' => '1',
          'pesan' => 'Data Berhasil dihapus'
        ]);//,HTTP_OK);
    } else{
      $this->response([
          'kode' => '2',
          'pesan' => 'Data gagal dihapus'
      ]);
    }
  }
}
