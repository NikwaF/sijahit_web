<?php 

class Customer extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/customer/customer_mdl','customer');
	}
	
	public function index(){
		if(adminLoggedIn()){
			
		$info_user = $this->customer->get_customer_info();
		$data = [
			'isinya' => 'Admin/Dashboard/customers/info_user',
			'user_info' => $info_user
		];
		
		$this->load->view('Templates/Admin/master_dashboard',$data);
		} else{
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');			
		}
	}
	
	public function tagihan_harga()
	{
		if(adminLoggedIn())
		{
			$data = [
				'isinya' => 'Admin/Dashboard/customers/tagihan_harga'
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}
	
	public function aho(){
		$info_user = $this->customer->get_customer_info();
		print_r($info_user);
	}
}