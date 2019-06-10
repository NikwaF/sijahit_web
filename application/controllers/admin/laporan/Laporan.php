<?php 
	
	class Laporan extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	public function index(){
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/laporan/laporan'
      ];

			$this->load->view('Templates/Admin/master_dashboard', $data);

		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}
}
