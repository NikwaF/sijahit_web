<?php 

class Pesanan_belum_diukur extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('admin/pemesanan/pemesanan_mdl','pemesanan');
  }

  public function index(){
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/pemesanan/Pemesanan_belum_diukur',
				'belum_diukur' => $this->pemesanan->get_belum_diukur()
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
  }
}