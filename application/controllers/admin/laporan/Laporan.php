<<<<<<< HEAD
<?php 
	
	class Laporan extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	public function index(){
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'admin/Dashboard/laporan/laporan'
			];
			$this->load->view('Templates/Admin/master_dashboard', $data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}
}
=======
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
>>>>>>> d32dcdd825fba954ca80c1caecdb925a7683a6b6
