<?php

class Tolak_pesanan extends CI_Controller{

	public function __construct()
	{
		parent::__construct();	
	}

	public function index()
	{
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/pemesanan/tolak_pesanan'
			];

			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}
}