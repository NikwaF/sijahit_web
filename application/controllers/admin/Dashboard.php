<?php


class Dashboard extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('admin/pemesanan/pesanoffline_mdl','pesan_offline');
  }

  public function index(){
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/opening',
				'coba' => $this->pesan_offline->jumlah_offline()->result()
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else{
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}	
}
