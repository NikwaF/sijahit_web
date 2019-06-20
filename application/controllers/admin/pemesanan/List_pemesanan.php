<<<<<<< HEAD
<?php 

class List_pemesanan extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/pemesanan/list_pemesanan'
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}

	public function detail()
	{
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/pemesanan/detail_pemesanan'
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}	
	}

	public function resi()
	{
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/pemesanan/resi_pemesanan'
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}
=======
<?php 

class List_pemesanan extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/pemesanan/list_pemesanan'
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}
>>>>>>> d32dcdd825fba954ca80c1caecdb925a7683a6b6
}