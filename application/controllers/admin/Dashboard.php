<?php


class Dashboard extends CI_Controller{
  function __construct(){
    parent::__construct();
  }

  public function index(){
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/opening'
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else{
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}
	
	public function list_pemesanan(){
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/pemesanan/list_pemesanan'
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}
}
